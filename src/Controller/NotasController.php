<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Notas Controller
 *
 * @property \App\Model\Table\NotasTable $Notas
 */
class NotasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Notas->find()
            ->contain(['Alumnos', 'Activitats', 'Users']);
        $notas = $this->paginate($query);

        $this->set(compact('notas'));
    }

    /**
     * View method
     *
     * @param string|null $id Nota id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nota = $this->Notas->get($id, contain: ['Alumnos', 'Activitats', 'Users']);
        $this->set(compact('nota'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nota = $this->Notas->newEmptyEntity();
        if ($this->request->is('post')) {
            $nota = $this->Notas->patchEntity($nota, $this->request->getData());
            if ($this->Notas->save($nota)) {
                $this->Flash->success(__('The nota has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The nota could not be saved. Please, try again.'));
        }
        $alumnos = $this->Notas->Alumnos->find('list', limit: 200)->all();
        $activitats = $this->Notas->Activitats->find('list', limit: 200)->all();
        $users = $this->Notas->Users->find('list', limit: 200)->all();
        $this->set(compact('nota', 'alumnos', 'activitats', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Nota id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nota = $this->Notas->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nota = $this->Notas->patchEntity($nota, $this->request->getData());
            if ($this->Notas->save($nota)) {
                $this->Flash->success(__('The nota has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The nota could not be saved. Please, try again.'));
        }
        $alumnos = $this->Notas->Alumnos->find('list', limit: 200)->all();
        $activitats = $this->Notas->Activitats->find('list', limit: 200)->all();
        $users = $this->Notas->Users->find('list', limit: 200)->all();
        $this->set(compact('nota', 'alumnos', 'activitats', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Nota id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $nota = $this->Notas->get($id);
        if ($this->Notas->delete($nota)) {
            $this->Flash->success(__('The nota has been deleted.'));
        } else {
            $this->Flash->error(__('The nota could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
