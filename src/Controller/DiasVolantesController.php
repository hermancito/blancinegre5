<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * DiasVolantes Controller
 *
 * @property \App\Model\Table\DiasVolantesTable $DiasVolantes
 */
class DiasVolantesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->DiasVolantes->find()
            ->contain(['Dias', 'Volantes']);
        $diasVolantes = $this->paginate($query);

        $this->set(compact('diasVolantes'));
    }

    /**
     * View method
     *
     * @param string|null $id Dias Volante id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $diasVolante = $this->DiasVolantes->get($id, contain: ['Dias', 'Volantes']);
        $this->set(compact('diasVolante'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $diasVolante = $this->DiasVolantes->newEmptyEntity();
        if ($this->request->is('post')) {
            $diasVolante = $this->DiasVolantes->patchEntity($diasVolante, $this->request->getData());
            if ($this->DiasVolantes->save($diasVolante)) {
                $this->Flash->success(__('The dias volante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dias volante could not be saved. Please, try again.'));
        }
        $dias = $this->DiasVolantes->Dias->find('list', limit: 200)->all();
        $volantes = $this->DiasVolantes->Volantes->find('list', limit: 200)->all();
        $this->set(compact('diasVolante', 'dias', 'volantes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dias Volante id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $diasVolante = $this->DiasVolantes->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $diasVolante = $this->DiasVolantes->patchEntity($diasVolante, $this->request->getData());
            if ($this->DiasVolantes->save($diasVolante)) {
                $this->Flash->success(__('The dias volante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dias volante could not be saved. Please, try again.'));
        }
        $dias = $this->DiasVolantes->Dias->find('list', limit: 200)->all();
        $volantes = $this->DiasVolantes->Volantes->find('list', limit: 200)->all();
        $this->set(compact('diasVolante', 'dias', 'volantes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dias Volante id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $diasVolante = $this->DiasVolantes->get($id);
        if ($this->DiasVolantes->delete($diasVolante)) {
            $this->Flash->success(__('The dias volante has been deleted.'));
        } else {
            $this->Flash->error(__('The dias volante could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
