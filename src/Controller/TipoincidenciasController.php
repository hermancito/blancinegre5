<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipoincidencias Controller
 *
 * @property \App\Model\Table\TipoincidenciasTable $Tipoincidencias
 */
class TipoincidenciasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Tipoincidencias->find();
        $tipoincidencias = $this->paginate($query);

        $this->set(compact('tipoincidencias'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipoincidencia id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoincidencia = $this->Tipoincidencias->get($id, contain: ['Personalcontrols']);
        $this->set(compact('tipoincidencia'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoincidencia = $this->Tipoincidencias->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipoincidencia = $this->Tipoincidencias->patchEntity($tipoincidencia, $this->request->getData());
            if ($this->Tipoincidencias->save($tipoincidencia)) {
                $this->Flash->success(__('The tipoincidencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoincidencia could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoincidencia'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipoincidencia id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoincidencia = $this->Tipoincidencias->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoincidencia = $this->Tipoincidencias->patchEntity($tipoincidencia, $this->request->getData());
            if ($this->Tipoincidencias->save($tipoincidencia)) {
                $this->Flash->success(__('The tipoincidencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoincidencia could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoincidencia'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipoincidencia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoincidencia = $this->Tipoincidencias->get($id);
        if ($this->Tipoincidencias->delete($tipoincidencia)) {
            $this->Flash->success(__('The tipoincidencia has been deleted.'));
        } else {
            $this->Flash->error(__('The tipoincidencia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
