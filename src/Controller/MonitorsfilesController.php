<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Monitorsfiles Controller
 *
 * @property \App\Model\Table\MonitorsfilesTable $Monitorsfiles
 */
class MonitorsfilesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Monitorsfiles->find()
            ->contain(['Users', 'Monitors']);
        $monitorsfiles = $this->paginate($query);

        $this->set(compact('monitorsfiles'));
    }

    /**
     * View method
     *
     * @param string|null $id Monitorsfile id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $monitorsfile = $this->Monitorsfiles->get($id, contain: ['Users', 'Monitors']);
        $this->set(compact('monitorsfile'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $monitorsfile = $this->Monitorsfiles->newEmptyEntity();
        if ($this->request->is('post')) {
            $monitorsfile = $this->Monitorsfiles->patchEntity($monitorsfile, $this->request->getData());
            if ($this->Monitorsfiles->save($monitorsfile)) {
                $this->Flash->success(__('The monitorsfile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The monitorsfile could not be saved. Please, try again.'));
        }
        $users = $this->Monitorsfiles->Users->find('list', limit: 200)->all();
        $monitors = $this->Monitorsfiles->Monitors->find('list', limit: 200)->all();
        $this->set(compact('monitorsfile', 'users', 'monitors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Monitorsfile id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $monitorsfile = $this->Monitorsfiles->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $monitorsfile = $this->Monitorsfiles->patchEntity($monitorsfile, $this->request->getData());
            if ($this->Monitorsfiles->save($monitorsfile)) {
                $this->Flash->success(__('The monitorsfile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The monitorsfile could not be saved. Please, try again.'));
        }
        $users = $this->Monitorsfiles->Users->find('list', limit: 200)->all();
        $monitors = $this->Monitorsfiles->Monitors->find('list', limit: 200)->all();
        $this->set(compact('monitorsfile', 'users', 'monitors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Monitorsfile id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $monitorsfile = $this->Monitorsfiles->get($id);
        if ($this->Monitorsfiles->delete($monitorsfile)) {
            $this->Flash->success(__('The monitorsfile has been deleted.'));
        } else {
            $this->Flash->error(__('The monitorsfile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
