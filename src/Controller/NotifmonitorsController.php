<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Notifmonitors Controller
 *
 * @property \App\Model\Table\NotifmonitorsTable $Notifmonitors
 */
class NotifmonitorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Notifmonitors->find()
            ->contain(['Users']);
        $notifmonitors = $this->paginate($query);

        $this->set(compact('notifmonitors'));
    }

    /**
     * View method
     *
     * @param string|null $id Notifmonitor id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $notifmonitor = $this->Notifmonitors->get($id, contain: ['Users']);
        $this->set(compact('notifmonitor'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $notifmonitor = $this->Notifmonitors->newEmptyEntity();
        if ($this->request->is('post')) {
            $notifmonitor = $this->Notifmonitors->patchEntity($notifmonitor, $this->request->getData());
            if ($this->Notifmonitors->save($notifmonitor)) {
                $this->Flash->success(__('The notifmonitor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notifmonitor could not be saved. Please, try again.'));
        }
        $users = $this->Notifmonitors->Users->find('list', limit: 200)->all();
        $this->set(compact('notifmonitor', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Notifmonitor id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $notifmonitor = $this->Notifmonitors->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $notifmonitor = $this->Notifmonitors->patchEntity($notifmonitor, $this->request->getData());
            if ($this->Notifmonitors->save($notifmonitor)) {
                $this->Flash->success(__('The notifmonitor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notifmonitor could not be saved. Please, try again.'));
        }
        $users = $this->Notifmonitors->Users->find('list', limit: 200)->all();
        $this->set(compact('notifmonitor', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Notifmonitor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $notifmonitor = $this->Notifmonitors->get($id);
        if ($this->Notifmonitors->delete($notifmonitor)) {
            $this->Flash->success(__('The notifmonitor has been deleted.'));
        } else {
            $this->Flash->error(__('The notifmonitor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
