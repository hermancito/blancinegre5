<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Colegiofiles Controller
 *
 * @property \App\Model\Table\ColegiofilesTable $Colegiofiles
 */
class ColegiofilesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Colegiofiles->find()
            ->contain(['Users', 'Colegios']);
        $colegiofiles = $this->paginate($query);

        $this->set(compact('colegiofiles'));
    }

    /**
     * View method
     *
     * @param string|null $id Colegiofile id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $colegiofile = $this->Colegiofiles->get($id, contain: ['Users', 'Colegios']);
        $this->set(compact('colegiofile'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $colegiofile = $this->Colegiofiles->newEmptyEntity();
        if ($this->request->is('post')) {
            $colegiofile = $this->Colegiofiles->patchEntity($colegiofile, $this->request->getData());
            if ($this->Colegiofiles->save($colegiofile)) {
                $this->Flash->success(__('The colegiofile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The colegiofile could not be saved. Please, try again.'));
        }
        $users = $this->Colegiofiles->Users->find('list', limit: 200)->all();
        $colegios = $this->Colegiofiles->Colegios->find('list', limit: 200)->all();
        $this->set(compact('colegiofile', 'users', 'colegios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Colegiofile id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $colegiofile = $this->Colegiofiles->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $colegiofile = $this->Colegiofiles->patchEntity($colegiofile, $this->request->getData());
            if ($this->Colegiofiles->save($colegiofile)) {
                $this->Flash->success(__('The colegiofile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The colegiofile could not be saved. Please, try again.'));
        }
        $users = $this->Colegiofiles->Users->find('list', limit: 200)->all();
        $colegios = $this->Colegiofiles->Colegios->find('list', limit: 200)->all();
        $this->set(compact('colegiofile', 'users', 'colegios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Colegiofile id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $colegiofile = $this->Colegiofiles->get($id);
        if ($this->Colegiofiles->delete($colegiofile)) {
            $this->Flash->success(__('The colegiofile has been deleted.'));
        } else {
            $this->Flash->error(__('The colegiofile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
