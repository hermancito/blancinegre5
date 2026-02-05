<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Alumnos Controller
 *
 * @property \App\Model\Table\AlumnosTable $Alumnos
 */
class AlumnosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Alumnos->find()
            ->contain(['Users', 'User2s', 'Colegs']);
        $alumnos = $this->paginate($query);

        $this->set(compact('alumnos'));
    }

    /**
     * View method
     *
     * @param string|null $id Alumno id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $alumno = $this->Alumnos->get($id, contain: ['Users', 'User2s', 'Colegs', 'Activitats', 'Activitatsgrups', 'Coordinadors', 'Asistencias', 'Boletines', 'Devoluciones', 'Notas', 'Registroaltas', 'Registrobajas']);
        $this->set(compact('alumno'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alumno = $this->Alumnos->newEmptyEntity();
        if ($this->request->is('post')) {
            $alumno = $this->Alumnos->patchEntity($alumno, $this->request->getData());
            if ($this->Alumnos->save($alumno)) {
                $this->Flash->success(__('The alumno has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alumno could not be saved. Please, try again.'));
        }
        $users = $this->Alumnos->Users->find('list', limit: 200)->all();
        $user2s = $this->Alumnos->User2s->find('list', limit: 200)->all();
        $colegs = $this->Alumnos->Colegs->find('list', limit: 200)->all();
        $activitats = $this->Alumnos->Activitats->find('list', limit: 200)->all();
        $activitatsgrups = $this->Alumnos->Activitatsgrups->find('list', limit: 200)->all();
        $coordinadors = $this->Alumnos->Coordinadors->find('list', limit: 200)->all();
        $this->set(compact('alumno', 'users', 'user2s', 'colegs', 'activitats', 'activitatsgrups', 'coordinadors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Alumno id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alumno = $this->Alumnos->get($id, contain: ['Activitats', 'Activitatsgrups', 'Coordinadors']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alumno = $this->Alumnos->patchEntity($alumno, $this->request->getData());
            if ($this->Alumnos->save($alumno)) {
                $this->Flash->success(__('The alumno has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alumno could not be saved. Please, try again.'));
        }
        $users = $this->Alumnos->Users->find('list', limit: 200)->all();
        $user2s = $this->Alumnos->User2s->find('list', limit: 200)->all();
        $colegs = $this->Alumnos->Colegs->find('list', limit: 200)->all();
        $activitats = $this->Alumnos->Activitats->find('list', limit: 200)->all();
        $activitatsgrups = $this->Alumnos->Activitatsgrups->find('list', limit: 200)->all();
        $coordinadors = $this->Alumnos->Coordinadors->find('list', limit: 200)->all();
        $this->set(compact('alumno', 'users', 'user2s', 'colegs', 'activitats', 'activitatsgrups', 'coordinadors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Alumno id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alumno = $this->Alumnos->get($id);
        if ($this->Alumnos->delete($alumno)) {
            $this->Flash->success(__('The alumno has been deleted.'));
        } else {
            $this->Flash->error(__('The alumno could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
