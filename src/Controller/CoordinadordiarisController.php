<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Coordinadordiaris Controller
 *
 * @property \App\Model\Table\CoordinadordiarisTable $Coordinadordiaris
 */
class CoordinadordiarisController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Coordinadordiaris->find()
            ->contain(['Colegios', 'Coordinadors', 'Intervencions']);
        $coordinadordiaris = $this->paginate($query);

        $this->set(compact('coordinadordiaris'));
    }

    /**
     * View method
     *
     * @param string|null $id Coordinadordiari id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coordinadordiari = $this->Coordinadordiaris->get($id, contain: ['Colegios', 'Coordinadors', 'Intervencions']);
        $this->set(compact('coordinadordiari'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coordinadordiari = $this->Coordinadordiaris->newEmptyEntity();
        if ($this->request->is('post')) {
            $coordinadordiari = $this->Coordinadordiaris->patchEntity($coordinadordiari, $this->request->getData());
            if ($this->Coordinadordiaris->save($coordinadordiari)) {
                $this->Flash->success(__('The coordinadordiari has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coordinadordiari could not be saved. Please, try again.'));
        }
        $colegios = $this->Coordinadordiaris->Colegios->find('list', limit: 200)->all();
        $coordinadors = $this->Coordinadordiaris->Coordinadors->find('list', limit: 200)->all();
        $intervencions = $this->Coordinadordiaris->Intervencions->find('list', limit: 200)->all();
        $this->set(compact('coordinadordiari', 'colegios', 'coordinadors', 'intervencions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Coordinadordiari id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coordinadordiari = $this->Coordinadordiaris->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coordinadordiari = $this->Coordinadordiaris->patchEntity($coordinadordiari, $this->request->getData());
            if ($this->Coordinadordiaris->save($coordinadordiari)) {
                $this->Flash->success(__('The coordinadordiari has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coordinadordiari could not be saved. Please, try again.'));
        }
        $colegios = $this->Coordinadordiaris->Colegios->find('list', limit: 200)->all();
        $coordinadors = $this->Coordinadordiaris->Coordinadors->find('list', limit: 200)->all();
        $intervencions = $this->Coordinadordiaris->Intervencions->find('list', limit: 200)->all();
        $this->set(compact('coordinadordiari', 'colegios', 'coordinadors', 'intervencions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Coordinadordiari id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coordinadordiari = $this->Coordinadordiaris->get($id);
        if ($this->Coordinadordiaris->delete($coordinadordiari)) {
            $this->Flash->success(__('The coordinadordiari has been deleted.'));
        } else {
            $this->Flash->error(__('The coordinadordiari could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
