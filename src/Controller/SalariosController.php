<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Salarios Controller
 *
 * @property \App\Model\Table\SalariosTable $Salarios
 */
class SalariosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Salarios->find()
            ->contain(['Users']);
        $salarios = $this->paginate($query);

        $this->set(compact('salarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Salario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $salario = $this->Salarios->get($id, contain: ['Users']);
        $this->set(compact('salario'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $salario = $this->Salarios->newEmptyEntity();
        if ($this->request->is('post')) {
            $salario = $this->Salarios->patchEntity($salario, $this->request->getData());
            if ($this->Salarios->save($salario)) {
                $this->Flash->success(__('The salario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The salario could not be saved. Please, try again.'));
        }
        $users = $this->Salarios->Users->find('list', limit: 200)->all();
        $this->set(compact('salario', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Salario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $salario = $this->Salarios->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $salario = $this->Salarios->patchEntity($salario, $this->request->getData());
            if ($this->Salarios->save($salario)) {
                $this->Flash->success(__('The salario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The salario could not be saved. Please, try again.'));
        }
        $users = $this->Salarios->Users->find('list', limit: 200)->all();
        $this->set(compact('salario', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Salario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $salario = $this->Salarios->get($id);
        if ($this->Salarios->delete($salario)) {
            $this->Flash->success(__('The salario has been deleted.'));
        } else {
            $this->Flash->error(__('The salario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
