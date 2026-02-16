<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Registroaltas Controller
 *
 * @property \App\Model\Table\RegistroaltasTable $Registroaltas
 */
class RegistroaltasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Registroaltas->find()
            ->contain(['Colegios', 'Alumnos']);
        $registroaltas = $this->paginate($query);

        $this->set(compact('registroaltas'));
    }

    /**
     * View method
     *
     * @param string|null $id Registroalta id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $registroalta = $this->Registroaltas->get($id, contain: ['Colegios', 'Alumnos', 'Activitats']);
        $this->set(compact('registroalta'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $registroalta = $this->Registroaltas->newEmptyEntity();
        if ($this->request->is('post')) {
            $registroalta = $this->Registroaltas->patchEntity($registroalta, $this->request->getData());
            if ($this->Registroaltas->save($registroalta)) {
                $this->Flash->success(__('The registroalta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registroalta could not be saved. Please, try again.'));
        }
        $colegios = $this->Registroaltas->Colegios->find('list', limit: 200)->all();
        $alumnos = $this->Registroaltas->Alumnos->find('list', limit: 200)->all();
        $activitats = $this->Registroaltas->Activitats->find('list', limit: 200)->all();
        $this->set(compact('registroalta', 'colegios', 'alumnos', 'activitats'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Registroalta id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $registroalta = $this->Registroaltas->get($id, contain: ['Activitats']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $registroalta = $this->Registroaltas->patchEntity($registroalta, $this->request->getData());
            if ($this->Registroaltas->save($registroalta)) {
                $this->Flash->success(__('The registroalta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registroalta could not be saved. Please, try again.'));
        }
        $colegios = $this->Registroaltas->Colegios->find('list', limit: 200)->all();
        $alumnos = $this->Registroaltas->Alumnos->find('list', limit: 200)->all();
        $activitats = $this->Registroaltas->Activitats->find('list', limit: 200)->all();
        $this->set(compact('registroalta', 'colegios', 'alumnos', 'activitats'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Registroalta id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $registroalta = $this->Registroaltas->get($id);
        if ($this->Registroaltas->delete($registroalta)) {
            $this->Flash->success(__('The registroalta has been deleted.'));
        } else {
            $this->Flash->error(__('The registroalta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
