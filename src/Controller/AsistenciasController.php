<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Asistencias Controller
 *
 * @property \App\Model\Table\AsistenciasTable $Asistencias
 */
class AsistenciasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Asistencias->find()
            ->contain(['Alumnos', 'Activitatsgrups']);
        $asistencias = $this->paginate($query);

        $this->set(compact('asistencias'));
    }

    /**
     * View method
     *
     * @param string|null $id Asistencia id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $asistencia = $this->Asistencias->get($id, contain: ['Alumnos', 'Activitatsgrups']);
        $this->set(compact('asistencia'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $asistencia = $this->Asistencias->newEmptyEntity();
        if ($this->request->is('post')) {
            $asistencia = $this->Asistencias->patchEntity($asistencia, $this->request->getData());
            if ($this->Asistencias->save($asistencia)) {
                $this->Flash->success(__('The asistencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The asistencia could not be saved. Please, try again.'));
        }
        $alumnos = $this->Asistencias->Alumnos->find('list', limit: 200)->all();
        $activitatsgrups = $this->Asistencias->Activitatsgrups->find('list', limit: 200)->all();
        $this->set(compact('asistencia', 'alumnos', 'activitatsgrups'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Asistencia id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $asistencia = $this->Asistencias->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $asistencia = $this->Asistencias->patchEntity($asistencia, $this->request->getData());
            if ($this->Asistencias->save($asistencia)) {
                $this->Flash->success(__('The asistencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The asistencia could not be saved. Please, try again.'));
        }
        $alumnos = $this->Asistencias->Alumnos->find('list', limit: 200)->all();
        $activitatsgrups = $this->Asistencias->Activitatsgrups->find('list', limit: 200)->all();
        $this->set(compact('asistencia', 'alumnos', 'activitatsgrups'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Asistencia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $asistencia = $this->Asistencias->get($id);
        if ($this->Asistencias->delete($asistencia)) {
            $this->Flash->success(__('The asistencia has been deleted.'));
        } else {
            $this->Flash->error(__('The asistencia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
