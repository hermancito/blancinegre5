<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event): void
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->allowUnauthenticated(['login', 'add']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Users->find()
            ->contain(['Colegios']);
        $users = $this->paginate($query);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, contain: ['Colegios', 'Activitats', 'Destinos', 'Roles', 'Alumnos', 'Notas', 'Notificacions', 'Salarios', 'AlumnosXml', 'Notificacionpdfs', 'Colegiofiles', 'Colegiofilesfamilias', 'Coordinadorsfiles', 'Monitorsfiles', 'Boletines', 'Sustitucions', 'Eventos', 'Personalcontrols']);
        $this->set(compact('user'));
    }

    // public function login()
    // {
    //     if ($this->request->is('post')) {
    //         //if ($this->Recaptcha->verify()) {
    //             $user = $this->Auth->identify();
    //             if ($user) {
    //                 if ($user['validado'] == true && parent::isSupervisor($user) == false) {
    //                     $this->Auth->setUser($user);
    //                     return $this->redirect($this->Auth->redirectUrl());
    //                 } else if ($user['validado'] == true && parent::isSupervisor($user) == true) {
    //                     $this->Auth->setUser($user);
    //                     return $this->redirect(['controller' => 'users', 'action' => 'mantenimientosuperv']);
    //                 } else {
    //                     $this->Flash->error('Tu acceso como usuario está pendiente de validación por el administrador', ['key' => 'auth']);
    //                 }
    //             } else {
    //                 $this->Flash->error('Tu email o password son incorrectos.', ['key' => 'auth']);
    //             }
    //         /*}else{
    //             $this->Flash->error(__('Por favor, checkea Recaptcha Box.'));
    //         }*/
    //     }
    // }

    public function login()
    {
        $result = $this->Authentication->getResult();
        // If the user is logged in send them away.
        if ($result && $result->isValid()) {
            //$target = $this->Authentication->getLoginRedirect() ?? '/home';
            $target = ['controller' => 'pages', 'action' => 'home'];
            return $this->redirect($target);
        }
        if ($this->request->is('post')) {
            $this->Flash->error('Invalid username or password');
        }
    }

    public function logout()
    {
        $this->Authentication->logout();
        return $this->redirect(['controller' => 'Users', 'action' => 'login']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $colegios = $this->Users->Colegios->find('list', limit: 200)->all();
        $activitats = $this->Users->Activitats->find('list', limit: 200)->all();
        $destinos = $this->Users->Destinos->find('list', limit: 200)->all();
        $roles = $this->Users->Roles->find('list', limit: 200)->all();
        $this->set(compact('user', 'colegios', 'activitats', 'destinos', 'roles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, contain: ['Activitats', 'Destinos', 'Roles']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $colegios = $this->Users->Colegios->find('list', limit: 200)->all();
        $activitats = $this->Users->Activitats->find('list', limit: 200)->all();
        $destinos = $this->Users->Destinos->find('list', limit: 200)->all();
        $roles = $this->Users->Roles->find('list', limit: 200)->all();
        $this->set(compact('user', 'colegios', 'activitats', 'destinos', 'roles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
