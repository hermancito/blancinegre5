<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Actualizautomaticas Controller
 *
 * @property \App\Model\Table\ActualizautomaticasTable $Actualizautomaticas
 */
class ActualizautomaticasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Actualizautomaticas->find();
        $actualizautomaticas = $this->paginate($query);

        $this->set(compact('actualizautomaticas'));
    }

    /**
     * View method
     *
     * @param string|null $id Actualizautomatica id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $actualizautomatica = $this->Actualizautomaticas->get($id, contain: []);
        $this->set(compact('actualizautomatica'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $actualizautomatica = $this->Actualizautomaticas->newEmptyEntity();
        if ($this->request->is('post')) {
            $actualizautomatica = $this->Actualizautomaticas->patchEntity($actualizautomatica, $this->request->getData());
            if ($this->Actualizautomaticas->save($actualizautomatica)) {
                $this->Flash->success(__('The actualizautomatica has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actualizautomatica could not be saved. Please, try again.'));
        }
        $this->set(compact('actualizautomatica'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Actualizautomatica id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $actualizautomatica = $this->Actualizautomaticas->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actualizautomatica = $this->Actualizautomaticas->patchEntity($actualizautomatica, $this->request->getData());
            if ($this->Actualizautomaticas->save($actualizautomatica)) {
                $this->Flash->success(__('The actualizautomatica has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actualizautomatica could not be saved. Please, try again.'));
        }
        $this->set(compact('actualizautomatica'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Actualizautomatica id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $actualizautomatica = $this->Actualizautomaticas->get($id);
        if ($this->Actualizautomaticas->delete($actualizautomatica)) {
            $this->Flash->success(__('The actualizautomatica has been deleted.'));
        } else {
            $this->Flash->error(__('The actualizautomatica could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
