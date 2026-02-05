<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Colegiofilesfamilias Controller
 *
 * @property \App\Model\Table\ColegiofilesfamiliasTable $Colegiofilesfamilias
 */
class ColegiofilesfamiliasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Colegiofilesfamilias->find()
            ->contain(['Users', 'Colegios']);
        $colegiofilesfamilias = $this->paginate($query);

        $this->set(compact('colegiofilesfamilias'));
    }

    /**
     * View method
     *
     * @param string|null $id Colegiofilesfamilia id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $colegiofilesfamilia = $this->Colegiofilesfamilias->get($id, contain: ['Users', 'Colegios']);
        $this->set(compact('colegiofilesfamilia'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $colegiofilesfamilia = $this->Colegiofilesfamilias->newEmptyEntity();
        if ($this->request->is('post')) {
            $colegiofilesfamilia = $this->Colegiofilesfamilias->patchEntity($colegiofilesfamilia, $this->request->getData());
            if ($this->Colegiofilesfamilias->save($colegiofilesfamilia)) {
                $this->Flash->success(__('The colegiofilesfamilia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The colegiofilesfamilia could not be saved. Please, try again.'));
        }
        $users = $this->Colegiofilesfamilias->Users->find('list', limit: 200)->all();
        $colegios = $this->Colegiofilesfamilias->Colegios->find('list', limit: 200)->all();
        $this->set(compact('colegiofilesfamilia', 'users', 'colegios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Colegiofilesfamilia id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $colegiofilesfamilia = $this->Colegiofilesfamilias->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $colegiofilesfamilia = $this->Colegiofilesfamilias->patchEntity($colegiofilesfamilia, $this->request->getData());
            if ($this->Colegiofilesfamilias->save($colegiofilesfamilia)) {
                $this->Flash->success(__('The colegiofilesfamilia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The colegiofilesfamilia could not be saved. Please, try again.'));
        }
        $users = $this->Colegiofilesfamilias->Users->find('list', limit: 200)->all();
        $colegios = $this->Colegiofilesfamilias->Colegios->find('list', limit: 200)->all();
        $this->set(compact('colegiofilesfamilia', 'users', 'colegios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Colegiofilesfamilia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $colegiofilesfamilia = $this->Colegiofilesfamilias->get($id);
        if ($this->Colegiofilesfamilias->delete($colegiofilesfamilia)) {
            $this->Flash->success(__('The colegiofilesfamilia has been deleted.'));
        } else {
            $this->Flash->error(__('The colegiofilesfamilia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
