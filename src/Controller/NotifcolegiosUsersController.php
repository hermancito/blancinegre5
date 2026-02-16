<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * NotifcolegiosUsers Controller
 *
 * @property \App\Model\Table\NotifcolegiosUsersTable $NotifcolegiosUsers
 */
class NotifcolegiosUsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->NotifcolegiosUsers->find()
            ->contain(['Notifcolegios', 'Users']);
        $notifcolegiosUsers = $this->paginate($query);

        $this->set(compact('notifcolegiosUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Notifcolegios User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $notifcolegiosUser = $this->NotifcolegiosUsers->get($id, contain: ['Notifcolegios', 'Users']);
        $this->set(compact('notifcolegiosUser'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $notifcolegiosUser = $this->NotifcolegiosUsers->newEmptyEntity();
        if ($this->request->is('post')) {
            $notifcolegiosUser = $this->NotifcolegiosUsers->patchEntity($notifcolegiosUser, $this->request->getData());
            if ($this->NotifcolegiosUsers->save($notifcolegiosUser)) {
                $this->Flash->success(__('The notifcolegios user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notifcolegios user could not be saved. Please, try again.'));
        }
        $notifcolegios = $this->NotifcolegiosUsers->Notifcolegios->find('list', limit: 200)->all();
        $users = $this->NotifcolegiosUsers->Users->find('list', limit: 200)->all();
        $this->set(compact('notifcolegiosUser', 'notifcolegios', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Notifcolegios User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $notifcolegiosUser = $this->NotifcolegiosUsers->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $notifcolegiosUser = $this->NotifcolegiosUsers->patchEntity($notifcolegiosUser, $this->request->getData());
            if ($this->NotifcolegiosUsers->save($notifcolegiosUser)) {
                $this->Flash->success(__('The notifcolegios user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notifcolegios user could not be saved. Please, try again.'));
        }
        $notifcolegios = $this->NotifcolegiosUsers->Notifcolegios->find('list', limit: 200)->all();
        $users = $this->NotifcolegiosUsers->Users->find('list', limit: 200)->all();
        $this->set(compact('notifcolegiosUser', 'notifcolegios', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Notifcolegios User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $notifcolegiosUser = $this->NotifcolegiosUsers->get($id);
        if ($this->NotifcolegiosUsers->delete($notifcolegiosUser)) {
            $this->Flash->success(__('The notifcolegios user has been deleted.'));
        } else {
            $this->Flash->error(__('The notifcolegios user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
