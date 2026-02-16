<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ActivitatsAlumnos Controller
 *
 * @property \App\Model\Table\ActivitatsAlumnosTable $ActivitatsAlumnos
 */
class ActivitatsAlumnosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->ActivitatsAlumnos->find()
            ->contain(['Activitats', 'Alumnos']);
        $activitatsAlumnos = $this->paginate($query);

        $this->set(compact('activitatsAlumnos'));
    }

    /**
     * View method
     *
     * @param string|null $id Activitats Alumno id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $activitatsAlumno = $this->ActivitatsAlumnos->get($id, contain: ['Activitats', 'Alumnos']);
        $this->set(compact('activitatsAlumno'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $activitatsAlumno = $this->ActivitatsAlumnos->newEmptyEntity();
        if ($this->request->is('post')) {
            $activitatsAlumno = $this->ActivitatsAlumnos->patchEntity($activitatsAlumno, $this->request->getData());
            if ($this->ActivitatsAlumnos->save($activitatsAlumno)) {
                $this->Flash->success(__('The activitats alumno has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitats alumno could not be saved. Please, try again.'));
        }
        $activitats = $this->ActivitatsAlumnos->Activitats->find('list', limit: 200)->all();
        $alumnos = $this->ActivitatsAlumnos->Alumnos->find('list', limit: 200)->all();
        $this->set(compact('activitatsAlumno', 'activitats', 'alumnos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Activitats Alumno id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $activitatsAlumno = $this->ActivitatsAlumnos->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $activitatsAlumno = $this->ActivitatsAlumnos->patchEntity($activitatsAlumno, $this->request->getData());
            if ($this->ActivitatsAlumnos->save($activitatsAlumno)) {
                $this->Flash->success(__('The activitats alumno has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitats alumno could not be saved. Please, try again.'));
        }
        $activitats = $this->ActivitatsAlumnos->Activitats->find('list', limit: 200)->all();
        $alumnos = $this->ActivitatsAlumnos->Alumnos->find('list', limit: 200)->all();
        $this->set(compact('activitatsAlumno', 'activitats', 'alumnos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Activitats Alumno id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $activitatsAlumno = $this->ActivitatsAlumnos->get($id);
        if ($this->ActivitatsAlumnos->delete($activitatsAlumno)) {
            $this->Flash->success(__('The activitats alumno has been deleted.'));
        } else {
            $this->Flash->error(__('The activitats alumno could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
