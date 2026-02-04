<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Empresasdos Controller
 *
 * @property \App\Model\Table\EmpresasdosTable $Empresasdos
 */
class EmpresasdosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Empresasdos->find();
        $empresasdos = $this->paginate($query);

        $this->set(compact('empresasdos'));
    }

    /**
     * View method
     *
     * @param string|null $id Empresasdo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empresasdo = $this->Empresasdos->get($id, contain: []);
        $this->set(compact('empresasdo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $empresasdo = $this->Empresasdos->newEmptyEntity();
        if ($this->request->is('post')) {
            $empresasdo = $this->Empresasdos->patchEntity($empresasdo, $this->request->getData());
            if ($this->Empresasdos->save($empresasdo)) {
                $this->Flash->success(__('The empresasdo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The empresasdo could not be saved. Please, try again.'));
        }
        $this->set(compact('empresasdo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Empresasdo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $empresasdo = $this->Empresasdos->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empresasdo = $this->Empresasdos->patchEntity($empresasdo, $this->request->getData());
            if ($this->Empresasdos->save($empresasdo)) {
                $this->Flash->success(__('The empresasdo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The empresasdo could not be saved. Please, try again.'));
        }
        $this->set(compact('empresasdo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Empresasdo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empresasdo = $this->Empresasdos->get($id);
        if ($this->Empresasdos->delete($empresasdo)) {
            $this->Flash->success(__('The empresasdo has been deleted.'));
        } else {
            $this->Flash->error(__('The empresasdo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
