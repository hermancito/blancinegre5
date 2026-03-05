<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\View\JsonView;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Cake\Mailer\Mailer;
use Cake\Http\Exception\BadRequestException;

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

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $user = $this->Authentication->getIdentity();
        //COORDINADORES
        if(isset($user['validado']) and $user['validado']==true and parent::isAdmin($user)==false
            and parent::isGestor($user)==false and parent::isCoord($user)==true){
            //si esta validado pero no es administrador puede acceder a las siguientes acciones
            if(in_array($this->request->getParam('action'), [
                'view',
                'actxcolegio'])){
                return true;
            }else{
                //si nuestro usuario sigue logeado pero no tiene acceso le mandamos un mensaje de que no tiene permisos
                $this->Flash->error(__('No se puede acceder. Sólo usuarios administradores pueden acceder a esta acción'));
                return $this->redirect(['controller' => 'Users', 'action' => 'login']);
            }
        //GESTORES
        }else if(isset($user['validado']) and $user['validado']==true and parent::isAdmin($user)==false and parent::isGestor($user)==true){
            //si esta validado pero no es administrador puede acceder a las siguientes acciones
            if(in_array($this->request->getParam('action'), [
                'view',
                'index',
                'actxcolegio',
                'obtieneUser',
                'exportexcel',
                'cargaactiv'
                ])){
                return true;
            }else{
                //si nuestro usuario sigue logeado pero no tiene acceso le mandamos un mensaje de que no tiene permisos
                $this->Flash->error(__('No se puede acceder. Sólo usuarios administradores pueden acceder a esta acción'));
                return $this->redirect(['controller' => 'Users', 'action' => 'login']);
            }
            //GESTORES RHHH
        }else if(isset($user['validado']) and $user['validado']==true and parent::isAdmin($user)==false and parent::isGestorRRHH($user)==true){
            //si esta validado pero no es administrador puede acceder a las siguientes acciones
            if(in_array($this->request->getParam('action'), [
                'view',
                'index',
                'actxcolegio',
                'obtieneUser',
                'exportexcel',
                'cargaactiv'
            ])){
                return true;
            }else{
                //si nuestro usuario sigue logeado pero no tiene acceso le mandamos un mensaje de que no tiene permisos
                $this->Flash->error(__('No se puede acceder. Sólo usuarios administradores pueden acceder a esta acción'));
                return $this->redirect(['controller' => 'Users', 'action' => 'login']);
            }
            #SUPERVISORES
        }else if(isset($user['validado']) and $user['validado']==true and parent::isAdmin($user)==false and parent::isSupervisor($user)==true){
            //si esta validado pero no es administrador puede acceder a las siguientes acciones
            if(in_array($this->request->getParam('action'), [
                'supervisoractxcolegio',
            ])){
                return true;
            }else{
                //si nuestro usuario sigue logeado pero no tiene acceso le mandamos un mensaje de que no tiene permisos
                $this->Flash->error(__('No se puede acceder. Sólo usuarios administradores pueden acceder a esta acción'));
                return $this->redirect(['controller' => 'Users', 'action' => 'login']);
            }
        }
        else if(isset($user['validado']) and $user['validado']==false){
            $this->Flash->error(__('No se puede acceder. Sólo usuarios administradores pueden acceder a esta acción'));
            return $this->redirect(['controller' => 'Users', 'action' => 'login']);
        }else{
            return parent::isAuthorized($user);
        }
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
        
        $this->set('activitats', $activitats);
        $this->viewBuilder()->setOption('serialize', ['activitats']);
    }

    public function listaactivitatsrest()
    {
        $activitats = $this->Activitats
            ->find()
            ->contain([
                'Alumnos' => fn($q) => $q->orderBy(['nombre_apellidos' => 'ASC']),
                'Dias',
                'Users'
            ])
            ->orderBy(['Activitats.nombre' => 'ASC']);

        $this->set(compact('activitats'));

        $this->viewBuilder()->setOption('serialize', ['activitats']);
    }

    public function activitatsxcoordrest($id_coord = null)
    {
        if ($id_coord === null) {
            throw new BadRequestException('id_coord es obligatorio');
        }

        $activitats = $this->Activitats
            ->find()
            ->contain([
                'Alumnos' => fn($q) => $q->orderBy(['nombre_apellidos' => 'ASC']),
                'Dias',
                'Users'
            ])
            ->matching('Colegios', fn($q) =>
                $q->matching('ColegiosCoordinadors', fn($q2) =>
                    $q2->where(['ColegiosCoordinadors.coordinador_id' => $id_coord])
                )
            )
            ->orderBy(['Activitats.nombre' => 'ASC']);

        $this->set(compact('activitats'));
        $this->viewBuilder()->setOption('serialize', ['activitats']);
    }

    public function nuevasactivxmonitrest($id_monit = null)
    {
        if ($id_monit === null) {
            throw new BadRequestException('id_monit es obligatorio');
        }

        $activitatsMonitors = $this->fetchTable('ActivitatsMonitors');

        $listaAct = $activitatsMonitors
            ->find()
            ->select(['activitat_id'])
            ->where(['monitor_id' => $id_monit])
            ->enableHydration(false)
            ->all()
            ->extract('activitat_id')
            ->toList();

        $query = $this->Activitats->find()->orderBy(['Activitats.nombre' => 'ASC']);

        if (!empty($listaAct)) {
            $query->where(['id NOT IN' => $listaAct]);
        }

        $this->set(compact('query'));
        $this->viewBuilder()->setOption('serialize', ['query']);
    }

    public function activitatsxalumno($id_alumno = null)
    {
        if ($id_alumno === null) {
            throw new BadRequestException('id_alumno es obligatorio');
        }

        $activitats = $this->Activitats
            ->find()
            ->matching('Alumnos', fn($q) => $q->where(['Alumnos.id' => $id_alumno]));

        $this->set(compact('activitats'));
        $this->viewBuilder()->setOption('serialize', ['activitats']);
    }

    public function activitatsxcolegio($id_col = null)
    {
        if ($id_col === null) {
            throw new BadRequestException('id_col es obligatorio');
        }

        $activitats = $this->Activitats
            ->find()
            ->contain(['Alumnos', 'Colegios', 'Dias', 'Monitors', 'Activitatsgrups'=>['Alumnos']])
            ->matching('Colegios', fn($q) => $q->where(['Colegios.id' => $id_col]))
            ->orderBy(['Activitats.nombre' => 'ASC']);

        $alumnosxgrupo = [];

        foreach($activitats as $act){
            $al_grups = 0;
            foreach($act['activitatsgrups'] as $gr){
                foreach($gr['alumnos'] as $al){
                    if ($al->coleg_id == $id_col && $al->activo && !$al->eliminado) {
                        $al_grups++;
                    }
                }
            }
            $alumnosxgrupo[] = [$act->id, $al_grups];
        }

        $this->set(compact('activitats','alumnosxgrupo'));
        $this->viewBuilder()->setOption('serialize', ['activitats','alumnosxgrupo']);
    }

    
    public function solicitudactrest()
    {
        $message = '';
        $this->request->allowMethod(['post', 'put']);
        if ($this->request->is('post')) {
            $monitor_id = $this->request->getData('monitor_id');
            $act_id = $this->request->getData('activitat_id');
            $monitor = $this->Activitats->Monitors->get($monitor_id);
            $nom_monitor = $monitor->nombre.' '.$monitor->apellidos;
            $activitat = $this->Activitats->get($act_id);
            $email = new Mailer('default');
            $email->setTo('personal@blancinegreanimacio.com')
                ->setFrom(['appadmin@app.blancinegreanimacio.com' => 'App Blanc i negre'])
                ->setSubject('Solicitud de monitor para asociación a nueva actividad')
                ->setViewVars([ //enviar variables a la plantilla
                    'var1'=>$monitor->email,'var2'=>$nom_monitor, 'var3'=>$monitor->codigo,'var4'=>$activitat->nombre,'var5'=>$activitat->codigo])
                ->setAttachments([
                    'logo' => [
                        'file' => 'img/logo-bina.png',
                        'mimetype' => 'image/png',
                        'contentId' => 'mylogo'
                    ]
                ])
                ->template('solicnuevaactiv') //plantilla a utilizar
                ->send();
            if($email){
                $message = 'grabado';
            }
        }

        $this->set([
            'message' => $message,
            
        ]);
        $this->viewBuilder()->setOption('serialize', ['message']);
    }

    public function activitatsgestor(){
        $activitats = $this->Activitats->find()->contain(['Alumnos', 'Colegios', 'Dias', 'Monitors', 'Activitatsgrups'])
            ->orderBy(['Activitats.nombre'=>'ASC']);


        $this->set([
            'activitats' => $activitats,
            
        ]);
        $this->viewBuilder()->setOption('serialize', ['activitats']);
    }

    public function activitatsxmonitrest($id_monit = null)
    {
        if ($id_monit === null) {
            throw new BadRequestException('id_monit es obligatorio');
        }

        $activitats = $this->Activitats
            ->find()
            ->contain(['Alumnos', 'Colegios', 'Dias', 'Monitors', 'Activitatsgrups'])
            ->matching('Monitors', fn($q) => $q->where(['Monitors.id' => $id_monit]))
            ->orderBy(['Activitats.nombre' => 'ASC']);

        $this->set(compact('activitats'));
        $this->viewBuilder()->setOption('serialize', ['activitats']);
    }

    public function activitatsxmonitor($id_monit = null){
        if ($id_monit === null) {
            throw new BadRequestException('id_monit es obligatorio');
        }

        $list_activ = [];
        
        $act_monit = $this->fetchTable('ActivitatsMonitors')->find()->where(['monitor_id'=>$id_monit]);
        foreach($act_monit as $am){
            $list_activ[]=$am->activitat_id;
        }
        $activitats = $this->Activitats->find()->select(['id', 'nombre'])->contain(['Alumnos', 'Dias', 'Users'])
        ->where(['Activitats.id IN'=>$list_activ]);
        /*$activitats = $this->Activitats->find()->select(['id', 'nombre'])->contain(['Alumnos', 'Dias', 'Users'])
        ->where(['monitor_id'=>$id_monit]);*/
        $this->set([
            'activitats' => $activitats,
            
        ]);
        $this->viewBuilder()->setOption('serialize', ['activitats']);
    }

    //función para eliminar elementos repetidos de un array de objetos
    public function superUnique(array $array, string $key): array
    {
        $temp = [];

        foreach ($array as $item) {
            $temp[$item[$key]] = $item;
        }

        return array_values($temp);
    }

    public function activitatsxmonit($id_monit = null){
        $colegios = array();
        $list_activ = [];
        
        $existen_act = $this->fetchTable('ActivitatsMonitors')->find()->where(['monitor_id'=>$id_monit])->count();
        if ($existen_act != 0){
            $act_monit = $this->fetchTable('ActivitatsMonitors')->find()->where(['monitor_id'=>$id_monit]);
            foreach($act_monit as $am){
                $list_activ[]=$am->activitat_id;
            }
            $activitats = $this->Activitats->find()->select(['id', 'nombre'])->contain(['Users'])
                ->where(['Activitats.id IN'=>$list_activ]);
            /*$activitats = $this->Activitats->find()->select(['id', 'nombre'])
                ->contain(['Users'])
                ->where(['monitor_id' => $id_monit]);*/
            foreach ($activitats as $activitat){
                $colegio = $activitat->users;

                foreach($colegio as $col){
                    $colegios[]=$col;
                }
            }

            $colegios_sin_repeticion = $this->superUnique($colegios,'id');

            $this->set([
                'colegios' => $colegios_sin_repeticion,
                
            ]);
            $this->viewBuilder()->setOption('serialize', ['colegios']);
        }else{
            $this->set([
                'message' => 'Este monitor no tiene actividades asociadas en ningún colegio',
                
            ]);
            $this->viewBuilder()->setOption('serialize', ['message']);
        }

    }

    public function actxcolegio($id_col = null)
    {
        $activitats = $this->Activitats->find()->contain(['Alumnos', 'Colegios', 'Dias', 'Monitors', 'Activitatsgrups'=>['Dias', 'Monitors']])->matching('Colegios', function ($q) use ($id_col) {
            return $q->where(['Colegios.id' => $id_col]);
        });
        $activitats = $this->paginate($activitats);
        $colegio = $this->Activitats->Colegios->get($id_col);
        $this->set(compact('activitats', 'colegio'));
    }

    public function supervisoractxcolegio()
    {
        $identity = $this->request->getAttribute('identity');
        $idSuperv = $identity->get('id');

        $user = $this->fetchTable('Users')->get($idSuperv);
        $idColeg = $user->colegio_id;

        $activitats = $this->Activitats
            ->find()
            ->contain([
                'Alumnos',
                'Colegios',
                'Dias',
                'Monitors',
                'Activitatsgrups' => ['Dias', 'Monitors']
            ])
            ->matching('Colegios', function ($q) use ($idColeg) {
                return $q->where(['Colegios.id' => $idColeg]);
            });

        $activitats = $this->paginate($activitats);

        $colegio = $this->Activitats->Colegios->get($idColeg);

        $this->set(compact('activitats', 'colegio'));
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
        //$this->fetchTable('ActivitatsUsers');
        //$this->fetchTable('RolesUsers');
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            $activitat = $this->Activitats->patchEntity($activitat, $this->request->getData());
            if ($this->Activitats->save($activitat)) {
                //vemos si se graba visor de actividades
                if($data['visors'] != ''){
                    foreach($data['visors'] as $visor){
                        $existe_visor = $this->fetchTable('ActivitatsUsers')->find()->where(['activitat_id'=>$id])
                            ->andWhere(['user_id'=>$visor])->count();
                        if($existe_visor == 0){
                            $query = $this->fetchTable('ActivitatsUsers')->insertQuery();
                            $query->insert(['activitat_id', 'user_id'])
                                ->values([
                                    'activitat_id' => $id,
                                    'user_id' => $visor,
                                ])
                                ->execute();
                        }

                    }
                }
                $this->Flash->success(__('La actividad se ha modificado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La actividad NO se ha modificado. Please, try again.'));
        }
        //$alumnos = $this->Activitats->Alumnos->find('list', ['limit' => 200]);
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
        //cogemos solo los usuario del rol visor
        $visors->matching('Roles', function ($q) {
            return $q->where(['Roles.id' => 9]);
        });
        $lista_visors  =[];
        $noms_visors  =[];
        $act_users = $this->fetchTable('ActivitatsUsers')->find()->where(['activitat_id'=>$id]);
        foreach ($act_users as $au) {
            $roles = $this->fetchTable('RolesUsers')->find()->where(['user_id'=>$au->user_id]);
            foreach ($roles as $rol){
                if($rol->role_id == 9){
                    $nom_visor = $this->Activitats->Users->get($au->user_id);
                    $lista_visors[]=$au->user_id;
                    $noms_visors[]=$nom_visor->nombre.' '.$nom_visor->apellidos;
                }
            }
        }
        $myvisors = implode(',',$lista_visors);
        $mynomsvisors = implode(',',$noms_visors);
        $num_visores = count($lista_visors);
        $monitors = $this->Activitats->Monitors->find('list')->where(['Monitors.validado'=>true])->orderBy(['Monitors.nombre']);
        $dias = $this->Activitats->Dias->find('list', ['limit' => 200]);
        $this->set(compact('activitat', 'colegios', 'dias', 'monitors', 'editors', 'visors',
            'myvisors', 'num_visores', 'mynomsvisors'));
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

    public function obtieneUser(){

        if($this->request->is('ajax')) {
            //recibimos por ajax el id del usuario
            $data = $this->request->getData();
            $id = $this->request->$data['id'];
            
            $user = $this->fetchTable('Users')->get($id);
            $this->set([
                'user' => $user,
            ]);
            $this->viewBuilder()->setOption('serialize', ['user']);
            //return json_encode(compact('user'));
        }
        //echo json_encode(compact('user'));

    }

    public function exportexcel()
    {
        // Traemos las actividades con relaciones
        $activitats = $this->Activitats->find()
            ->contain(['Activitatsgrups', 'Colegios', 'Monitors']);

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Cabecera
        $sheet->fromArray([
            'id',
            'Nombre actividad',
            'Código',
            'Creado',
            'Modificado',
            'Monitores',
            'Colegios',
            'Grupos'
        ], null, 'A1');

        $filaExcel = 2;

        foreach ($activitats as $cf) {
            // MONITORES
            $monitors = [];
            if (!empty($cf->monitors)) {
                foreach ($cf->monitors as $monit) {
                    $user = $this->Activitats->Users->get($monit->id);
                    $monitors[] = $user?->username ? $user->username . ' - ' : '';
                }
            }

            // COLEGIOS
            $colegios = [];
            if (!empty($cf->colegios)) {
                foreach ($cf->colegios as $col) {
                    $user = $this->Activitats->Colegios->get($col->id);
                    $colegios[] = $user?->username ? $user->username . ' - ' : '';
                }
            }

            // GRUPOS
            $grups = [];
            if (!empty($cf->activitatsgrups)) {
                foreach ($cf->activitatsgrups as $grup) {
                    $g = $this->Activitats->Activitatsgrups->get($grup->id);
                    $grups[] = $g?->codigo ? $g->codigo . ' - ' : '';
                }
            }

            // Preparamos la fila para Excel
            $fila = [
                $cf->id,
                $cf->nombre ?? '',
                $cf->codigo ?? '',
                $cf->created ? $cf->created->format('Y-m-d H:i:s') : '',
                $cf->modified ? $cf->modified->format('Y-m-d H:i:s') : '',
                implode('', $monitors),
                implode('', $colegios),
                implode('', $grups)
            ];

            $sheet->fromArray($fila, null, 'A' . $filaExcel);
            $filaExcel++;
        }

        // Preparar descarga
        $filename = "actividades.xlsx";

        $this->response = $this->response->withType(
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        );
        $this->response = $this->response->withDownload($filename);

        $writer = new Xlsx($spreadsheet);
        ob_start();
        $writer->save('php://output');
        $excelOutput = ob_get_clean();

        return $this->response->withStringBody($excelOutput);
    }

    public function cargaactiv()
    {
        $this->request->allowMethod(['ajax', 'post']);

        $data = $this->request->getData();
        $idMonitor = (int)($data['id_monitor'] ?? 0);

        $activitatsMonitorsTable = $this->fetchTable('ActivitatsMonitors');
        $activitatsTable = $this->fetchTable('Activitats');

        $activitatsMonitors = $activitatsMonitorsTable
            ->find()
            ->where(['monitor_id' => $idMonitor])
            ->all();

        $idsAsociados = [];

        foreach ($activitatsMonitors as $am) {
            $idsAsociados[] = $am->activitat_id;
        }

        $query = $activitatsTable->find()->orderBy(['codigo' => 'ASC']);

        if (!empty($idsAsociados)) {
            $query->where(['id NOT IN' => $idsAsociados]);
        }

        $actNoAsoc = [];

        foreach ($query as $activitat) {
            $actNoAsoc[$activitat->id] =
                'Código: ' . $activitat->codigo .
                ' /Actividad: ' . $activitat->nombre;
        }

        if (!empty($actNoAsoc)) {
            $error = 'NO';
        } elseif (!empty($idsAsociados)) {
            $error = 'NO_SIN_ASOCIAR';
        } else {
            $error = 'SI';
        }

        $this->set([
            'error1' => $error,
            'listaactiv' => $actNoAsoc,
        ]);

        $this->viewBuilder()->setOption('serialize', ['error1', 'listaactiv']);
    }
    
}
