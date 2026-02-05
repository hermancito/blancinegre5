<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Horarimonitors Controller
 *
 * @property \App\Model\Table\HorarimonitorsTable $Horarimonitors
 */
class HorarimonitorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Horarimonitors->find()
            ->contain(['Users']);
        $horarimonitors = $this->paginate($query);

        $this->set(compact('horarimonitors'));
    }

    /**
     * View method
     *
     * @param string|null $id Horarimonitor id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $horarimonitor = $this->Horarimonitors->get($id, contain: ['Users']);
        $this->set(compact('horarimonitor'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $horarimonitor = $this->Horarimonitors->newEmptyEntity();
        if ($this->request->is('post')) {
            $horarimonitor = $this->Horarimonitors->patchEntity($horarimonitor, $this->request->getData());
            if ($this->Horarimonitors->save($horarimonitor)) {
                $this->Flash->success(__('The horarimonitor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The horarimonitor could not be saved. Please, try again.'));
        }
        $users = $this->Horarimonitors->Users->find('list', limit: 200)->all();
        $this->set(compact('horarimonitor', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Horarimonitor id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $horarimonitor = $this->Horarimonitors->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $horarimonitor = $this->Horarimonitors->patchEntity($horarimonitor, $this->request->getData());
            if ($this->Horarimonitors->save($horarimonitor)) {
                $this->Flash->success(__('The horarimonitor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The horarimonitor could not be saved. Please, try again.'));
        }
        $users = $this->Horarimonitors->Users->find('list', limit: 200)->all();
        $this->set(compact('horarimonitor', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Horarimonitor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $horarimonitor = $this->Horarimonitors->get($id);
        if ($this->Horarimonitors->delete($horarimonitor)) {
            $this->Flash->success(__('The horarimonitor has been deleted.'));
        } else {
            $this->Flash->error(__('The horarimonitor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
