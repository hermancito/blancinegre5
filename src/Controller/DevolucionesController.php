<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Devoluciones Controller
 *
 * @property \App\Model\Table\DevolucionesTable $Devoluciones
 */
class DevolucionesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Devoluciones->find()
            ->contain(['Colegios', 'Alumnos']);
        $devoluciones = $this->paginate($query);

        $this->set(compact('devoluciones'));
    }

    /**
     * View method
     *
     * @param string|null $id Devolucione id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $devolucione = $this->Devoluciones->get($id, contain: ['Colegios', 'Alumnos']);
        $this->set(compact('devolucione'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $devolucione = $this->Devoluciones->newEmptyEntity();
        if ($this->request->is('post')) {
            $devolucione = $this->Devoluciones->patchEntity($devolucione, $this->request->getData());
            if ($this->Devoluciones->save($devolucione)) {
                $this->Flash->success(__('The devolucione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The devolucione could not be saved. Please, try again.'));
        }
        $colegios = $this->Devoluciones->Colegios->find('list', limit: 200)->all();
        $alumnos = $this->Devoluciones->Alumnos->find('list', limit: 200)->all();
        $this->set(compact('devolucione', 'colegios', 'alumnos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Devolucione id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $devolucione = $this->Devoluciones->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $devolucione = $this->Devoluciones->patchEntity($devolucione, $this->request->getData());
            if ($this->Devoluciones->save($devolucione)) {
                $this->Flash->success(__('The devolucione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The devolucione could not be saved. Please, try again.'));
        }
        $colegios = $this->Devoluciones->Colegios->find('list', limit: 200)->all();
        $alumnos = $this->Devoluciones->Alumnos->find('list', limit: 200)->all();
        $this->set(compact('devolucione', 'colegios', 'alumnos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Devolucione id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $devolucione = $this->Devoluciones->get($id);
        if ($this->Devoluciones->delete($devolucione)) {
            $this->Flash->success(__('The devolucione has been deleted.'));
        } else {
            $this->Flash->error(__('The devolucione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
