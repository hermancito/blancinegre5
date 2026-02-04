<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tablaspreciosvbles Controller
 *
 * @property \App\Model\Table\TablaspreciosvblesTable $Tablaspreciosvbles
 */
class TablaspreciosvblesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Tablaspreciosvbles->find();
        $tablaspreciosvbles = $this->paginate($query);

        $this->set(compact('tablaspreciosvbles'));
    }

    /**
     * View method
     *
     * @param string|null $id Tablaspreciosvble id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tablaspreciosvble = $this->Tablaspreciosvbles->get($id, contain: ['Colegios']);
        $this->set(compact('tablaspreciosvble'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tablaspreciosvble = $this->Tablaspreciosvbles->newEmptyEntity();
        if ($this->request->is('post')) {
            $tablaspreciosvble = $this->Tablaspreciosvbles->patchEntity($tablaspreciosvble, $this->request->getData());
            if ($this->Tablaspreciosvbles->save($tablaspreciosvble)) {
                $this->Flash->success(__('The tablaspreciosvble has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tablaspreciosvble could not be saved. Please, try again.'));
        }
        $this->set(compact('tablaspreciosvble'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tablaspreciosvble id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tablaspreciosvble = $this->Tablaspreciosvbles->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tablaspreciosvble = $this->Tablaspreciosvbles->patchEntity($tablaspreciosvble, $this->request->getData());
            if ($this->Tablaspreciosvbles->save($tablaspreciosvble)) {
                $this->Flash->success(__('The tablaspreciosvble has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tablaspreciosvble could not be saved. Please, try again.'));
        }
        $this->set(compact('tablaspreciosvble'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tablaspreciosvble id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tablaspreciosvble = $this->Tablaspreciosvbles->get($id);
        if ($this->Tablaspreciosvbles->delete($tablaspreciosvble)) {
            $this->Flash->success(__('The tablaspreciosvble has been deleted.'));
        } else {
            $this->Flash->error(__('The tablaspreciosvble could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
