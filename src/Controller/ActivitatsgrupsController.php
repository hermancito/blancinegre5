<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Activitatsgrups Controller
 *
 * @property \App\Model\Table\ActivitatsgrupsTable $Activitatsgrups
 */
class ActivitatsgrupsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Activitatsgrups->find()
            ->contain(['Activitats', 'Colegios']);
        $activitatsgrups = $this->paginate($query);

        $this->set(compact('activitatsgrups'));
    }

    /**
     * View method
     *
     * @param string|null $id Activitatsgrup id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $activitatsgrup = $this->Activitatsgrups->get($id, contain: ['Activitats', 'Colegios', 'ActivitatsMonitors', 'Alumnos', 'Dias', 'Jornadasgrups', 'Monitors', 'Asistencias', 'Disponibilitats', 'Registrobajas']);
        $this->set(compact('activitatsgrup'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $activitatsgrup = $this->Activitatsgrups->newEmptyEntity();
        if ($this->request->is('post')) {
            $activitatsgrup = $this->Activitatsgrups->patchEntity($activitatsgrup, $this->request->getData());
            if ($this->Activitatsgrups->save($activitatsgrup)) {
                $this->Flash->success(__('The activitatsgrup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitatsgrup could not be saved. Please, try again.'));
        }
        $activitats = $this->Activitatsgrups->Activitats->find('list', limit: 200)->all();
        $colegios = $this->Activitatsgrups->Colegios->find('list', limit: 200)->all();
        $activitatsMonitors = $this->Activitatsgrups->ActivitatsMonitors->find('list', limit: 200)->all();
        $alumnos = $this->Activitatsgrups->Alumnos->find('list', limit: 200)->all();
        $dias = $this->Activitatsgrups->Dias->find('list', limit: 200)->all();
        $jornadasgrups = $this->Activitatsgrups->Jornadasgrups->find('list', limit: 200)->all();
        $monitors = $this->Activitatsgrups->Monitors->find('list', limit: 200)->all();
        $this->set(compact('activitatsgrup', 'activitats', 'colegios', 'activitatsMonitors', 'alumnos', 'dias', 'jornadasgrups', 'monitors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Activitatsgrup id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $activitatsgrup = $this->Activitatsgrups->get($id, contain: ['ActivitatsMonitors', 'Alumnos', 'Dias', 'Jornadasgrups', 'Monitors']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $activitatsgrup = $this->Activitatsgrups->patchEntity($activitatsgrup, $this->request->getData());
            if ($this->Activitatsgrups->save($activitatsgrup)) {
                $this->Flash->success(__('The activitatsgrup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitatsgrup could not be saved. Please, try again.'));
        }
        $activitats = $this->Activitatsgrups->Activitats->find('list', limit: 200)->all();
        $colegios = $this->Activitatsgrups->Colegios->find('list', limit: 200)->all();
        $activitatsMonitors = $this->Activitatsgrups->ActivitatsMonitors->find('list', limit: 200)->all();
        $alumnos = $this->Activitatsgrups->Alumnos->find('list', limit: 200)->all();
        $dias = $this->Activitatsgrups->Dias->find('list', limit: 200)->all();
        $jornadasgrups = $this->Activitatsgrups->Jornadasgrups->find('list', limit: 200)->all();
        $monitors = $this->Activitatsgrups->Monitors->find('list', limit: 200)->all();
        $this->set(compact('activitatsgrup', 'activitats', 'colegios', 'activitatsMonitors', 'alumnos', 'dias', 'jornadasgrups', 'monitors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Activitatsgrup id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $activitatsgrup = $this->Activitatsgrups->get($id);
        if ($this->Activitatsgrups->delete($activitatsgrup)) {
            $this->Flash->success(__('The activitatsgrup has been deleted.'));
        } else {
            $this->Flash->error(__('The activitatsgrup could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
