<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Intervencions Controller
 *
 * @property \App\Model\Table\IntervencionsTable $Intervencions
 */
class IntervencionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Intervencions->find();
        $intervencions = $this->paginate($query);

        $this->set(compact('intervencions'));
    }

    /**
     * View method
     *
     * @param string|null $id Intervencion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $intervencion = $this->Intervencions->get($id, contain: ['Coordinadordiaris']);
        $this->set(compact('intervencion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $intervencion = $this->Intervencions->newEmptyEntity();
        if ($this->request->is('post')) {
            $intervencion = $this->Intervencions->patchEntity($intervencion, $this->request->getData());
            if ($this->Intervencions->save($intervencion)) {
                $this->Flash->success(__('The intervencion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The intervencion could not be saved. Please, try again.'));
        }
        $this->set(compact('intervencion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Intervencion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $intervencion = $this->Intervencions->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $intervencion = $this->Intervencions->patchEntity($intervencion, $this->request->getData());
            if ($this->Intervencions->save($intervencion)) {
                $this->Flash->success(__('The intervencion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The intervencion could not be saved. Please, try again.'));
        }
        $this->set(compact('intervencion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Intervencion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $intervencion = $this->Intervencions->get($id);
        if ($this->Intervencions->delete($intervencion)) {
            $this->Flash->success(__('The intervencion has been deleted.'));
        } else {
            $this->Flash->error(__('The intervencion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
