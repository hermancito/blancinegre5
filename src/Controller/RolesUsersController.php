<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * RolesUsers Controller
 *
 * @property \App\Model\Table\RolesUsersTable $RolesUsers
 */
class RolesUsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->RolesUsers->find()
            ->contain(['Roles', 'Users']);
        $rolesUsers = $this->paginate($query);

        $this->set(compact('rolesUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Roles User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rolesUser = $this->RolesUsers->get($id, contain: ['Roles', 'Users']);
        $this->set(compact('rolesUser'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rolesUser = $this->RolesUsers->newEmptyEntity();
        if ($this->request->is('post')) {
            $rolesUser = $this->RolesUsers->patchEntity($rolesUser, $this->request->getData());
            if ($this->RolesUsers->save($rolesUser)) {
                $this->Flash->success(__('The roles user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The roles user could not be saved. Please, try again.'));
        }
        $roles = $this->RolesUsers->Roles->find('list', limit: 200)->all();
        $users = $this->RolesUsers->Users->find('list', limit: 200)->all();
        $this->set(compact('rolesUser', 'roles', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Roles User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rolesUser = $this->RolesUsers->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rolesUser = $this->RolesUsers->patchEntity($rolesUser, $this->request->getData());
            if ($this->RolesUsers->save($rolesUser)) {
                $this->Flash->success(__('The roles user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The roles user could not be saved. Please, try again.'));
        }
        $roles = $this->RolesUsers->Roles->find('list', limit: 200)->all();
        $users = $this->RolesUsers->Users->find('list', limit: 200)->all();
        $this->set(compact('rolesUser', 'roles', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Roles User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rolesUser = $this->RolesUsers->get($id);
        if ($this->RolesUsers->delete($rolesUser)) {
            $this->Flash->success(__('The roles user has been deleted.'));
        } else {
            $this->Flash->error(__('The roles user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
