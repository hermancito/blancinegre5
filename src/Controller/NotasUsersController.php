<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * NotasUsers Controller
 *
 * @property \App\Model\Table\NotasUsersTable $NotasUsers
 */
class NotasUsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->NotasUsers->find()
            ->contain(['Notas', 'Users']);
        $notasUsers = $this->paginate($query);

        $this->set(compact('notasUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Notas User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $notasUser = $this->NotasUsers->get($id, contain: ['Notas', 'Users']);
        $this->set(compact('notasUser'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $notasUser = $this->NotasUsers->newEmptyEntity();
        if ($this->request->is('post')) {
            $notasUser = $this->NotasUsers->patchEntity($notasUser, $this->request->getData());
            if ($this->NotasUsers->save($notasUser)) {
                $this->Flash->success(__('The notas user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notas user could not be saved. Please, try again.'));
        }
        $notas = $this->NotasUsers->Notas->find('list', limit: 200)->all();
        $users = $this->NotasUsers->Users->find('list', limit: 200)->all();
        $this->set(compact('notasUser', 'notas', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Notas User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $notasUser = $this->NotasUsers->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $notasUser = $this->NotasUsers->patchEntity($notasUser, $this->request->getData());
            if ($this->NotasUsers->save($notasUser)) {
                $this->Flash->success(__('The notas user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notas user could not be saved. Please, try again.'));
        }
        $notas = $this->NotasUsers->Notas->find('list', limit: 200)->all();
        $users = $this->NotasUsers->Users->find('list', limit: 200)->all();
        $this->set(compact('notasUser', 'notas', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Notas User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $notasUser = $this->NotasUsers->get($id);
        if ($this->NotasUsers->delete($notasUser)) {
            $this->Flash->success(__('The notas user has been deleted.'));
        } else {
            $this->Flash->error(__('The notas user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
