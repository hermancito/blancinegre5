<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ActivitatsgrupsAlumnos Controller
 *
 * @property \App\Model\Table\ActivitatsgrupsAlumnosTable $ActivitatsgrupsAlumnos
 */
class ActivitatsgrupsAlumnosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->ActivitatsgrupsAlumnos->find()
            ->contain(['Activitatsgrups', 'Alumnos']);
        $activitatsgrupsAlumnos = $this->paginate($query);

        $this->set(compact('activitatsgrupsAlumnos'));
    }

    /**
     * View method
     *
     * @param string|null $id Activitatsgrups Alumno id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $activitatsgrupsAlumno = $this->ActivitatsgrupsAlumnos->get($id, contain: ['Activitatsgrups', 'Alumnos']);
        $this->set(compact('activitatsgrupsAlumno'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $activitatsgrupsAlumno = $this->ActivitatsgrupsAlumnos->newEmptyEntity();
        if ($this->request->is('post')) {
            $activitatsgrupsAlumno = $this->ActivitatsgrupsAlumnos->patchEntity($activitatsgrupsAlumno, $this->request->getData());
            if ($this->ActivitatsgrupsAlumnos->save($activitatsgrupsAlumno)) {
                $this->Flash->success(__('The activitatsgrups alumno has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitatsgrups alumno could not be saved. Please, try again.'));
        }
        $activitatsgrups = $this->ActivitatsgrupsAlumnos->Activitatsgrups->find('list', limit: 200)->all();
        $alumnos = $this->ActivitatsgrupsAlumnos->Alumnos->find('list', limit: 200)->all();
        $this->set(compact('activitatsgrupsAlumno', 'activitatsgrups', 'alumnos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Activitatsgrups Alumno id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $activitatsgrupsAlumno = $this->ActivitatsgrupsAlumnos->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $activitatsgrupsAlumno = $this->ActivitatsgrupsAlumnos->patchEntity($activitatsgrupsAlumno, $this->request->getData());
            if ($this->ActivitatsgrupsAlumnos->save($activitatsgrupsAlumno)) {
                $this->Flash->success(__('The activitatsgrups alumno has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitatsgrups alumno could not be saved. Please, try again.'));
        }
        $activitatsgrups = $this->ActivitatsgrupsAlumnos->Activitatsgrups->find('list', limit: 200)->all();
        $alumnos = $this->ActivitatsgrupsAlumnos->Alumnos->find('list', limit: 200)->all();
        $this->set(compact('activitatsgrupsAlumno', 'activitatsgrups', 'alumnos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Activitatsgrups Alumno id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $activitatsgrupsAlumno = $this->ActivitatsgrupsAlumnos->get($id);
        if ($this->ActivitatsgrupsAlumnos->delete($activitatsgrupsAlumno)) {
            $this->Flash->success(__('The activitatsgrups alumno has been deleted.'));
        } else {
            $this->Flash->error(__('The activitatsgrups alumno could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
