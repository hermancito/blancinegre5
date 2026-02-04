<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Destinos Controller
 *
 * @property \App\Model\Table\DestinosTable $Destinos
 */
class DestinosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Destinos->find();
        $destinos = $this->paginate($query);

        $this->set(compact('destinos'));
    }

    /**
     * View method
     *
     * @param string|null $id Destino id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $destino = $this->Destinos->get($id, contain: ['Users']);
        $this->set(compact('destino'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $destino = $this->Destinos->newEmptyEntity();
        if ($this->request->is('post')) {
            $destino = $this->Destinos->patchEntity($destino, $this->request->getData());
            if ($this->Destinos->save($destino)) {
                $this->Flash->success(__('The destino has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The destino could not be saved. Please, try again.'));
        }
        $users = $this->Destinos->Users->find('list', limit: 200)->all();
        $this->set(compact('destino', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Destino id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $destino = $this->Destinos->get($id, contain: ['Users']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $destino = $this->Destinos->patchEntity($destino, $this->request->getData());
            if ($this->Destinos->save($destino)) {
                $this->Flash->success(__('The destino has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The destino could not be saved. Please, try again.'));
        }
        $users = $this->Destinos->Users->find('list', limit: 200)->all();
        $this->set(compact('destino', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Destino id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $destino = $this->Destinos->get($id);
        if ($this->Destinos->delete($destino)) {
            $this->Flash->success(__('The destino has been deleted.'));
        } else {
            $this->Flash->error(__('The destino could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
