<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Horas Controller
 *
 * @property \App\Model\Table\HorasTable $Horas
 */
class HorasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Horas->find();
        $horas = $this->paginate($query);

        $this->set(compact('horas'));
    }

    /**
     * View method
     *
     * @param string|null $id Hora id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hora = $this->Horas->get($id, contain: ['Disponibilitats']);
        $this->set(compact('hora'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hora = $this->Horas->newEmptyEntity();
        if ($this->request->is('post')) {
            $hora = $this->Horas->patchEntity($hora, $this->request->getData());
            if ($this->Horas->save($hora)) {
                $this->Flash->success(__('The hora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hora could not be saved. Please, try again.'));
        }
        $this->set(compact('hora'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hora id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hora = $this->Horas->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hora = $this->Horas->patchEntity($hora, $this->request->getData());
            if ($this->Horas->save($hora)) {
                $this->Flash->success(__('The hora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hora could not be saved. Please, try again.'));
        }
        $this->set(compact('hora'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hora id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hora = $this->Horas->get($id);
        if ($this->Horas->delete($hora)) {
            $this->Flash->success(__('The hora has been deleted.'));
        } else {
            $this->Flash->error(__('The hora could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
