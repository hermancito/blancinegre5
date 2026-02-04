<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tiponodisponibilitats Controller
 *
 * @property \App\Model\Table\TiponodisponibilitatsTable $Tiponodisponibilitats
 */
class TiponodisponibilitatsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Tiponodisponibilitats->find();
        $tiponodisponibilitats = $this->paginate($query);

        $this->set(compact('tiponodisponibilitats'));
    }

    /**
     * View method
     *
     * @param string|null $id Tiponodisponibilitat id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tiponodisponibilitat = $this->Tiponodisponibilitats->get($id, contain: ['Disponibilitats']);
        $this->set(compact('tiponodisponibilitat'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tiponodisponibilitat = $this->Tiponodisponibilitats->newEmptyEntity();
        if ($this->request->is('post')) {
            $tiponodisponibilitat = $this->Tiponodisponibilitats->patchEntity($tiponodisponibilitat, $this->request->getData());
            if ($this->Tiponodisponibilitats->save($tiponodisponibilitat)) {
                $this->Flash->success(__('The tiponodisponibilitat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tiponodisponibilitat could not be saved. Please, try again.'));
        }
        $this->set(compact('tiponodisponibilitat'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tiponodisponibilitat id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tiponodisponibilitat = $this->Tiponodisponibilitats->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tiponodisponibilitat = $this->Tiponodisponibilitats->patchEntity($tiponodisponibilitat, $this->request->getData());
            if ($this->Tiponodisponibilitats->save($tiponodisponibilitat)) {
                $this->Flash->success(__('The tiponodisponibilitat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tiponodisponibilitat could not be saved. Please, try again.'));
        }
        $this->set(compact('tiponodisponibilitat'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tiponodisponibilitat id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tiponodisponibilitat = $this->Tiponodisponibilitats->get($id);
        if ($this->Tiponodisponibilitats->delete($tiponodisponibilitat)) {
            $this->Flash->success(__('The tiponodisponibilitat has been deleted.'));
        } else {
            $this->Flash->error(__('The tiponodisponibilitat could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
