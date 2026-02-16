<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Registrobajas Controller
 *
 * @property \App\Model\Table\RegistrobajasTable $Registrobajas
 */
class RegistrobajasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Registrobajas->find()
            ->contain(['Alumnos', 'Activitatsgrups', 'Colegios']);
        $registrobajas = $this->paginate($query);

        $this->set(compact('registrobajas'));
    }

    /**
     * View method
     *
     * @param string|null $id Registrobaja id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $registrobaja = $this->Registrobajas->get($id, contain: ['Alumnos', 'Activitatsgrups', 'Colegios']);
        $this->set(compact('registrobaja'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $registrobaja = $this->Registrobajas->newEmptyEntity();
        if ($this->request->is('post')) {
            $registrobaja = $this->Registrobajas->patchEntity($registrobaja, $this->request->getData());
            if ($this->Registrobajas->save($registrobaja)) {
                $this->Flash->success(__('The registrobaja has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registrobaja could not be saved. Please, try again.'));
        }
        $alumnos = $this->Registrobajas->Alumnos->find('list', limit: 200)->all();
        $activitatsgrups = $this->Registrobajas->Activitatsgrups->find('list', limit: 200)->all();
        $colegios = $this->Registrobajas->Colegios->find('list', limit: 200)->all();
        $this->set(compact('registrobaja', 'alumnos', 'activitatsgrups', 'colegios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Registrobaja id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $registrobaja = $this->Registrobajas->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $registrobaja = $this->Registrobajas->patchEntity($registrobaja, $this->request->getData());
            if ($this->Registrobajas->save($registrobaja)) {
                $this->Flash->success(__('The registrobaja has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registrobaja could not be saved. Please, try again.'));
        }
        $alumnos = $this->Registrobajas->Alumnos->find('list', limit: 200)->all();
        $activitatsgrups = $this->Registrobajas->Activitatsgrups->find('list', limit: 200)->all();
        $colegios = $this->Registrobajas->Colegios->find('list', limit: 200)->all();
        $this->set(compact('registrobaja', 'alumnos', 'activitatsgrups', 'colegios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Registrobaja id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $registrobaja = $this->Registrobajas->get($id);
        if ($this->Registrobajas->delete($registrobaja)) {
            $this->Flash->success(__('The registrobaja has been deleted.'));
        } else {
            $this->Flash->error(__('The registrobaja could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
