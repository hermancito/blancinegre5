<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Empresastres Controller
 *
 * @property \App\Model\Table\EmpresastresTable $Empresastres
 */
class EmpresastresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Empresastres->find();
        $empresastres = $this->paginate($query);

        $this->set(compact('empresastres'));
    }

    /**
     * View method
     *
     * @param string|null $id Empresastre id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empresastre = $this->Empresastres->get($id, contain: []);
        $this->set(compact('empresastre'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $empresastre = $this->Empresastres->newEmptyEntity();
        if ($this->request->is('post')) {
            $empresastre = $this->Empresastres->patchEntity($empresastre, $this->request->getData());
            if ($this->Empresastres->save($empresastre)) {
                $this->Flash->success(__('The empresastre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The empresastre could not be saved. Please, try again.'));
        }
        $this->set(compact('empresastre'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Empresastre id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $empresastre = $this->Empresastres->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empresastre = $this->Empresastres->patchEntity($empresastre, $this->request->getData());
            if ($this->Empresastres->save($empresastre)) {
                $this->Flash->success(__('The empresastre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The empresastre could not be saved. Please, try again.'));
        }
        $this->set(compact('empresastre'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Empresastre id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empresastre = $this->Empresastres->get($id);
        if ($this->Empresastres->delete($empresastre)) {
            $this->Flash->success(__('The empresastre has been deleted.'));
        } else {
            $this->Flash->error(__('The empresastre could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
