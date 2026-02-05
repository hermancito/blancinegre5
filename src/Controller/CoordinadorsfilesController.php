<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Coordinadorsfiles Controller
 *
 * @property \App\Model\Table\CoordinadorsfilesTable $Coordinadorsfiles
 */
class CoordinadorsfilesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Coordinadorsfiles->find()
            ->contain(['Users', 'Coordinadors']);
        $coordinadorsfiles = $this->paginate($query);

        $this->set(compact('coordinadorsfiles'));
    }

    /**
     * View method
     *
     * @param string|null $id Coordinadorsfile id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coordinadorsfile = $this->Coordinadorsfiles->get($id, contain: ['Users', 'Coordinadors']);
        $this->set(compact('coordinadorsfile'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coordinadorsfile = $this->Coordinadorsfiles->newEmptyEntity();
        if ($this->request->is('post')) {
            $coordinadorsfile = $this->Coordinadorsfiles->patchEntity($coordinadorsfile, $this->request->getData());
            if ($this->Coordinadorsfiles->save($coordinadorsfile)) {
                $this->Flash->success(__('The coordinadorsfile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coordinadorsfile could not be saved. Please, try again.'));
        }
        $users = $this->Coordinadorsfiles->Users->find('list', limit: 200)->all();
        $coordinadors = $this->Coordinadorsfiles->Coordinadors->find('list', limit: 200)->all();
        $this->set(compact('coordinadorsfile', 'users', 'coordinadors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Coordinadorsfile id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coordinadorsfile = $this->Coordinadorsfiles->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coordinadorsfile = $this->Coordinadorsfiles->patchEntity($coordinadorsfile, $this->request->getData());
            if ($this->Coordinadorsfiles->save($coordinadorsfile)) {
                $this->Flash->success(__('The coordinadorsfile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coordinadorsfile could not be saved. Please, try again.'));
        }
        $users = $this->Coordinadorsfiles->Users->find('list', limit: 200)->all();
        $coordinadors = $this->Coordinadorsfiles->Coordinadors->find('list', limit: 200)->all();
        $this->set(compact('coordinadorsfile', 'users', 'coordinadors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Coordinadorsfile id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coordinadorsfile = $this->Coordinadorsfiles->get($id);
        if ($this->Coordinadorsfiles->delete($coordinadorsfile)) {
            $this->Flash->success(__('The coordinadorsfile has been deleted.'));
        } else {
            $this->Flash->error(__('The coordinadorsfile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
