<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * NotificacionsUsers Controller
 *
 * @property \App\Model\Table\NotificacionsUsersTable $NotificacionsUsers
 */
class NotificacionsUsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->NotificacionsUsers->find()
            ->contain(['Notificacions', 'Users']);
        $notificacionsUsers = $this->paginate($query);

        $this->set(compact('notificacionsUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Notificacions User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $notificacionsUser = $this->NotificacionsUsers->get($id, contain: ['Notificacions', 'Users']);
        $this->set(compact('notificacionsUser'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $notificacionsUser = $this->NotificacionsUsers->newEmptyEntity();
        if ($this->request->is('post')) {
            $notificacionsUser = $this->NotificacionsUsers->patchEntity($notificacionsUser, $this->request->getData());
            if ($this->NotificacionsUsers->save($notificacionsUser)) {
                $this->Flash->success(__('The notificacions user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notificacions user could not be saved. Please, try again.'));
        }
        $notificacions = $this->NotificacionsUsers->Notificacions->find('list', limit: 200)->all();
        $users = $this->NotificacionsUsers->Users->find('list', limit: 200)->all();
        $this->set(compact('notificacionsUser', 'notificacions', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Notificacions User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $notificacionsUser = $this->NotificacionsUsers->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $notificacionsUser = $this->NotificacionsUsers->patchEntity($notificacionsUser, $this->request->getData());
            if ($this->NotificacionsUsers->save($notificacionsUser)) {
                $this->Flash->success(__('The notificacions user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notificacions user could not be saved. Please, try again.'));
        }
        $notificacions = $this->NotificacionsUsers->Notificacions->find('list', limit: 200)->all();
        $users = $this->NotificacionsUsers->Users->find('list', limit: 200)->all();
        $this->set(compact('notificacionsUser', 'notificacions', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Notificacions User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $notificacionsUser = $this->NotificacionsUsers->get($id);
        if ($this->NotificacionsUsers->delete($notificacionsUser)) {
            $this->Flash->success(__('The notificacions user has been deleted.'));
        } else {
            $this->Flash->error(__('The notificacions user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
