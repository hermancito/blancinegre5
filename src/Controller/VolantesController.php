<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Volantes Controller
 *
 * @property \App\Model\Table\VolantesTable $Volantes
 */
class VolantesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Volantes->find()
            ->contain(['Monitors']);
        $volantes = $this->paginate($query);

        $this->set(compact('volantes'));
    }

    /**
     * View method
     *
     * @param string|null $id Volante id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $volante = $this->Volantes->get($id, contain: ['Monitors', 'Dias']);
        $this->set(compact('volante'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $volante = $this->Volantes->newEmptyEntity();
        if ($this->request->is('post')) {
            $volante = $this->Volantes->patchEntity($volante, $this->request->getData());
            if ($this->Volantes->save($volante)) {
                $this->Flash->success(__('The volante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The volante could not be saved. Please, try again.'));
        }
        $monitors = $this->Volantes->Monitors->find('list', limit: 200)->all();
        $dias = $this->Volantes->Dias->find('list', limit: 200)->all();
        $this->set(compact('volante', 'monitors', 'dias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Volante id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $volante = $this->Volantes->get($id, contain: ['Dias']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $volante = $this->Volantes->patchEntity($volante, $this->request->getData());
            if ($this->Volantes->save($volante)) {
                $this->Flash->success(__('The volante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The volante could not be saved. Please, try again.'));
        }
        $monitors = $this->Volantes->Monitors->find('list', limit: 200)->all();
        $dias = $this->Volantes->Dias->find('list', limit: 200)->all();
        $this->set(compact('volante', 'monitors', 'dias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Volante id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $volante = $this->Volantes->get($id);
        if ($this->Volantes->delete($volante)) {
            $this->Flash->success(__('The volante has been deleted.'));
        } else {
            $this->Flash->error(__('The volante could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
