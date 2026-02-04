<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Activitats Controller
 *
 * @property \App\Model\Table\ActivitatsTable $Activitats
 */
class ActivitatsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Activitats->find();
        $activitats = $this->paginate($query);

        $this->set(compact('activitats'));
    }

    /**
     * View method
     *
     * @param string|null $id Activitat id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $activitat = $this->Activitats->get($id, contain: ['Alumnos', 'Colegios', 'Dias', 'Monitors', 'Registroaltas', 'Users', 'Activitatsgrups', 'Notas', 'Notificacions', 'Sustitucions']);
        $this->set(compact('activitat'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $activitat = $this->Activitats->newEmptyEntity();
        if ($this->request->is('post')) {
            $activitat = $this->Activitats->patchEntity($activitat, $this->request->getData());
            if ($this->Activitats->save($activitat)) {
                $this->Flash->success(__('The activitat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitat could not be saved. Please, try again.'));
        }
        $alumnos = $this->Activitats->Alumnos->find('list', limit: 200)->all();
        $colegios = $this->Activitats->Colegios->find('list', limit: 200)->all();
        $dias = $this->Activitats->Dias->find('list', limit: 200)->all();
        $monitors = $this->Activitats->Monitors->find('list', limit: 200)->all();
        $registroaltas = $this->Activitats->Registroaltas->find('list', limit: 200)->all();
        $users = $this->Activitats->Users->find('list', limit: 200)->all();
        $this->set(compact('activitat', 'alumnos', 'colegios', 'dias', 'monitors', 'registroaltas', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Activitat id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $activitat = $this->Activitats->get($id, contain: ['Alumnos', 'Colegios', 'Dias', 'Monitors', 'Registroaltas', 'Users']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $activitat = $this->Activitats->patchEntity($activitat, $this->request->getData());
            if ($this->Activitats->save($activitat)) {
                $this->Flash->success(__('The activitat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitat could not be saved. Please, try again.'));
        }
        $alumnos = $this->Activitats->Alumnos->find('list', limit: 200)->all();
        $colegios = $this->Activitats->Colegios->find('list', limit: 200)->all();
        $dias = $this->Activitats->Dias->find('list', limit: 200)->all();
        $monitors = $this->Activitats->Monitors->find('list', limit: 200)->all();
        $registroaltas = $this->Activitats->Registroaltas->find('list', limit: 200)->all();
        $users = $this->Activitats->Users->find('list', limit: 200)->all();
        $this->set(compact('activitat', 'alumnos', 'colegios', 'dias', 'monitors', 'registroaltas', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Activitat id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $activitat = $this->Activitats->get($id);
        if ($this->Activitats->delete($activitat)) {
            $this->Flash->success(__('The activitat has been deleted.'));
        } else {
            $this->Flash->error(__('The activitat could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
