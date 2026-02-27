<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ActivitatsColegios Controller
 *
 * @property \App\Model\Table\ActivitatsColegiosTable $ActivitatsColegios
 */
class ActivitatsColegiosController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event): void
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->allowUnauthenticated(['colxactiv']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->ActivitatsColegios->find()
            ->contain(['Activitats', 'Colegios']);
        $activitatsColegios = $this->paginate($query);

        $this->set(compact('activitatsColegios'));
    }

    /**
     * View method
     *
     * @param string|null $id Activitats Colegio id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $activitatsColegio = $this->ActivitatsColegios->get($id, contain: ['Activitats', 'Colegios']);
        $this->set(compact('activitatsColegio'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $activitatsColegio = $this->ActivitatsColegios->newEmptyEntity();
        if ($this->request->is('post')) {
            $activitatsColegio = $this->ActivitatsColegios->patchEntity($activitatsColegio, $this->request->getData());
            if ($this->ActivitatsColegios->save($activitatsColegio)) {
                $this->Flash->success(__('The activitats colegio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitats colegio could not be saved. Please, try again.'));
        }
        $activitats = $this->ActivitatsColegios->Activitats->find('list', limit: 200)->all();
        $colegios = $this->ActivitatsColegios->Colegios->find('list', limit: 200)->all();
        $this->set(compact('activitatsColegio', 'activitats', 'colegios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Activitats Colegio id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $activitatsColegio = $this->ActivitatsColegios->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $activitatsColegio = $this->ActivitatsColegios->patchEntity($activitatsColegio, $this->request->getData());
            if ($this->ActivitatsColegios->save($activitatsColegio)) {
                $this->Flash->success(__('The activitats colegio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitats colegio could not be saved. Please, try again.'));
        }
        $activitats = $this->ActivitatsColegios->Activitats->find('list', limit: 200)->all();
        $colegios = $this->ActivitatsColegios->Colegios->find('list', limit: 200)->all();
        $this->set(compact('activitatsColegio', 'activitats', 'colegios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Activitats Colegio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $activitatsColegio = $this->ActivitatsColegios->get($id);
        if ($this->ActivitatsColegios->delete($activitatsColegio)) {
            $this->Flash->success(__('The activitats colegio has been deleted.'));
        } else {
            $this->Flash->error(__('The activitats colegio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function colxactiv()
    {
        $this->request->allowMethod(['post']);
        if ($this->request->is('ajax')) {
            $this->viewBuilder()->setClassName('Json');
            //recibimos por ajax el id de la actividad
            $this->request->allowMethod(['post']);
            $data = $this->request->getData();
            $id_act = $data['id_act'];
            $colegios = $this->ActivitatsColegios->find()->where(['activitat_id'=>$id_act]);
            $mi_lista_col = [];
            $ids_col = [];
            foreach ($colegios as $col) {
                $ids_col[]= $col->colegio_id;

            }
            if (count($ids_col) != 0){
                $selecc_col = $this->ActivitatsColegios->Colegios->find()->where(['id IN'=>$ids_col]);

                foreach ($selecc_col as $sm){
                    $colegio = $sm->codigo.'/'.$sm->username;
                    $mi_lista_col[$sm->id]=[$colegio];

                }
                if (count($mi_lista_col) != 0){
                    $this->set([
                        'error1' => 'NO',
                        'listacol' => $mi_lista_col,
                        //'_serialize' => ['error1', 'listacol']
                    ]);
                    $this->viewBuilder()->setOption('serialize', ['error1', 'listacol']);

                }else{
                    $this->set([
                        'error1' => 'SI',
                        'listacol' => $mi_lista_col,
                        //'_serialize' => ['error1']
                    ]);
                    $this->viewBuilder()->setOption('serialize', ['error1', 'listacol']);

                }
            }else{
                $this->set([
                    'error1' => 'SI',
                    'listacol' => $mi_lista_col,
                    //'_serialize' => ['error1']
                ]);
                $this->viewBuilder()->setOption('serialize', ['error1', 'listacol']);

            }
            
        }
        
    }
}
