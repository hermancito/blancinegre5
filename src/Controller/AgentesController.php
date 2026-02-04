<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Agentes Controller
 *
 * @property \App\Model\Table\AgentesTable $Agentes
 */
class AgentesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Agentes->find();
        $agentes = $this->paginate($query);

        $this->set(compact('agentes'));
    }

    /**
     * View method
     *
     * @param string|null $id Agente id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agente = $this->Agentes->get($id, contain: ['Comercials']);
        $this->set(compact('agente'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agente = $this->Agentes->newEmptyEntity();
        if ($this->request->is('post')) {
            $agente = $this->Agentes->patchEntity($agente, $this->request->getData());
            if ($this->Agentes->save($agente)) {
                $this->Flash->success(__('The agente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agente could not be saved. Please, try again.'));
        }
        $this->set(compact('agente'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Agente id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agente = $this->Agentes->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agente = $this->Agentes->patchEntity($agente, $this->request->getData());
            if ($this->Agentes->save($agente)) {
                $this->Flash->success(__('The agente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agente could not be saved. Please, try again.'));
        }
        $this->set(compact('agente'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Agente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agente = $this->Agentes->get($id);
        if ($this->Agentes->delete($agente)) {
            $this->Flash->success(__('The agente has been deleted.'));
        } else {
            $this->Flash->error(__('The agente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
