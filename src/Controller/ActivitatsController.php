<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\View\JsonView;

/**
 * Activitats Controller
 *
 * @property \App\Model\Table\ActivitatsTable $Activitats
 */
class ActivitatsController extends AppController
{
    public function viewClasses(): array
    {
        return [JsonView::class];
    }
        
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $conditions = [];

        if (!empty($this->request->getQuery('PrgSearch'))) {
            $searchText = $this->request->getQuery('PrgSearch');
            // Buscamos todas lAs actividades que contengan el string deseado
            $activitats = $this->Activitats->find('list')
                ->where([
                    'OR' => [
                        'Activitats.nombre LIKE' => "%$searchText%",

                    ]
                ])->toArray();

            // Buscamos todas los usuarios (colegios) que contengan el string deseado
            $colegios = $this->Activitats->Colegios->find('list')
                ->where([
                    'OR' => [
                        'Colegios.username LIKE' => "%$searchText%",
                    ]
                ])->toArray();
            // Buscamos todas los usuarios (buscando monitores) que contengan el string deseado
            //$this->loadModel('Monitors');
            $monitores =  $this->fetchTable('Monitors')->find('list')
                ->where([
                    'OR' => [
                        'Monitors.username LIKE' => "%$searchText%",
                        'Monitors.nombre LIKE' => "%$searchText%",
                        'Monitors.apellidos LIKE' => "%$searchText%",
                    ]
                ])->toArray();
            // Buscamos todas los dias que contengan el string deseado
            $dias = $this->Activitats->Dias->find('list')
                ->where([
                    'OR' => [
                        'Dias.descripc LIKE' => "%$searchText%",

                    ]
                ])->toArray();

            // Le pasamos como condición los id's previamente encontrados
            if (!empty($activitats)) {
                $conditions['OR'][] = ['Activitats.id IN' => array_keys($activitats)];
            }

            // Le pasamos como condición los id's previamente encontrados
            if (!empty($colegios)) {
                $mis_users = [];
                $conditions_users = array_keys($colegios);
                //$this->loadModel('ActivitatsColegios');
                $act_users = $this->fetchTable('ActivitatsColegios')->find()->select(['activitat_id'])->where(['colegio_id IN' => $conditions_users]);
                foreach ($act_users as $act_user){
                    $mis_users[]= $act_user->activitat_id;
                }
                if(count($mis_users) != 0){
                    $conditions['OR'][] = ['Activitats.id IN' => $mis_users];
                }



            }

            if (!empty($monitores)) {
                $mis_monit = [];
                $conditions_monit = array_keys($monitores);
                //$this->loadModel('ActivitatsMonitors');
                $act_monit = $this->fetchTable('ActivitatsMonitors')->find()->select(['activitat_id'])->where(['monitor_id IN' => $conditions_monit]);
                foreach ($act_monit as $am){
                    $mis_monit[]= $am->activitat_id;
                }
                if(count($mis_monit) != 0){
                    $conditions['OR'][] = ['Activitats.id IN' => $mis_monit];
                }
            }

            // Le pasamos como condición los id's previamente encontrados
            if (!empty($dias)) {
                $mis_dias = [];
                $conditions_dias = array_keys($dias);
                //$this->fetchTable('ActivitatsDias');
                $act_dias = $this->fetchTable('ActivitatsDias')->find()->select(['activitat_id'])->where(['dia_id' => $conditions_dias[0]]);
                foreach ($act_dias as $act_dia){
                    $mis_dias[]= $act_dia->activitat_id;
                }
                $conditions['OR'][] = ['Activitats.id IN' => $mis_dias];
            }


            // Si no existen colegio o archivo pasamos como id 0 para ser
            // consistente y no mostrar ninún registro
            if (empty($activitats) && empty($colegios) && empty($dias) && empty($monitores)) {
                $conditions = [
                    'Activitats.id' => '0'
                ];
            }
            if (!empty($colegios) && !empty($monitores)){
                if(count($conditions) > 1){
                    unset($conditions['OR'][0]);
                }

            }
        }

        $options = [
            'conditions' => $conditions,
            'contain' => ['Activitatsgrups'=>['sort'=>'codigo'], 'Colegios'=>['sort'=>'username'], 'Monitors'=>['sort'=>'codigo'], 'Dias'],
            'maxLimit' => 8,
            'order' => [
                'Activitats.nombre' => 'asc'
            ]
        ];
        $query = $this->Activitats->find('all', ...$options);
        $this->set('activitats', $this->paginate($query));
    }

    public function indexrest()
    {
        $activitats = $this->Activitats->find('all')->contain(['Alumnos', 'Users']);
        // $this->set([
        //     'activitats' => $activitats,
        //     '_serialize' => ['activitats']
        // ]);
        $this->set('activitats', $activitats);
        $this->viewBuilder()->setOption('serialize', ['activitats']);
    }

    /**
     * View method
     *
     * @param string|null $id Activitat id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $activitat = $this->Activitats->get($id, contain: ['Alumnos', 'Colegios', 'Dias', 'Monitors', 'Registroaltas', 'Users', 'Activitatsgrups', 'Notas', 'Notificacions', 'Sustitucions']);
        $this->set(compact('activitat'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $activitat = $this->Activitats->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $activitat = $this->Activitats->patchEntity($activitat, $this->request->getData());
            $existe_act = $this->Activitats->find()->where(['nombre'=>$activitat['nombre']])->count();
            if($existe_act == 0){
                if ($new_act = $this->Activitats->save($activitat)) {
                    if($data['visors'] != ''){
                        
                        foreach($data['visors'] as $visor){
                            $query = $this->fetchTable('ActivitatsUsers')->insertQuery();
                            $query->insert(['activitat_id', 'user_id'])
                                ->values([
                                    'activitat_id' => $new_act->id,
                                    'user_id' => $visor,
                                ])
                                ->execute();
                        }
                    }
                    $this->Flash->success(__('Se ha grabado la actividad.'));

                    return $this->redirect(['action' => 'index']);
                }
            }else{
                $this->Flash->error(__('Ya existe una actividad con ese nombre.'));
            }

            $this->Flash->error(__('No se ha grabado la actividad. Inténtalo de nuevo.'));
        }
        $alumnos = $this->Activitats->Alumnos->find('list', ['limit' => 200]);
        $colegios = $this->Activitats->Colegios->find('list')->orderBy(['username'=>'ASC']);

        $editors = $this->Activitats->Users->find('list', [
            'keyField' => 'id',
            'valueField' => function ($user) {
                return $user->get('label');
            }
        ]);
        //cogemos solo los usuario del rol editor
        $editors->matching('Roles', function ($q) {
            return $q->where(['Roles.id' => 8]);
        });
        $visors = $this->Activitats->Users->find('list', [
            'keyField' => 'id',
            'valueField' => function ($user) {
                return $user->get('label');
            }
        ]);
        //cogemos solo los usuario del rol editor
        $visors->matching('Roles', function ($q) {
            return $q->where(['Roles.id' => 9]);
        });

        $monitors = $this->Activitats->Monitors->find('list')->where(['Monitors.validado'=>true])->orderBy(['Monitors.nombre']);
        $dias = $this->Activitats->Dias->find('list', ['limit' => 200]);
        $this->set(compact('activitat', 'alumnos', 'colegios', 'dias', 'monitors', 'editors', 'visors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Activitat id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $activitat = $this->Activitats->get($id, contain: ['Alumnos', 'Colegios', 'Dias', 'Monitors', 'Registroaltas', 'Users']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $activitat = $this->Activitats->patchEntity($activitat, $this->request->getData());
            if ($this->Activitats->save($activitat)) {
                $this->Flash->success(__('The activitat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitat could not be saved. Please, try again.'));
        }
        $alumnos = $this->Activitats->Alumnos->find('list', limit: 200)->all();
        $colegios = $this->Activitats->Colegios->find('list', limit: 200)->all();
        $dias = $this->Activitats->Dias->find('list', limit: 200)->all();
        $monitors = $this->Activitats->Monitors->find('list', limit: 200)->all();
        $registroaltas = $this->Activitats->Registroaltas->find('list', limit: 200)->all();
        $users = $this->Activitats->Users->find('list', limit: 200)->all();
        $this->set(compact('activitat', 'alumnos', 'colegios', 'dias', 'monitors', 'registroaltas', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Activitat id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $activitat = $this->Activitats->get($id);
        if ($this->Activitats->delete($activitat)) {
            $this->Flash->success(__('The activitat has been deleted.'));
        } else {
            $this->Flash->error(__('The activitat could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
