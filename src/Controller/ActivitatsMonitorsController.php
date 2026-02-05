<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ActivitatsMonitors Controller
 *
 * @property \App\Model\Table\ActivitatsMonitorsTable $ActivitatsMonitors
 */
class ActivitatsMonitorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->ActivitatsMonitors->find()
            ->contain(['Activitats', 'Monitors']);
        $activitatsMonitors = $this->paginate($query);

        $this->set(compact('activitatsMonitors'));
    }

    /**
     * View method
     *
     * @param string|null $id Activitats Monitor id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $activitatsMonitor = $this->ActivitatsMonitors->get($id, contain: ['Activitats', 'Monitors', 'Activitatsgrups']);
        $this->set(compact('activitatsMonitor'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $activitatsMonitor = $this->ActivitatsMonitors->newEmptyEntity();
        if ($this->request->is('post')) {
            $activitatsMonitor = $this->ActivitatsMonitors->patchEntity($activitatsMonitor, $this->request->getData());
            if ($this->ActivitatsMonitors->save($activitatsMonitor)) {
                $this->Flash->success(__('The activitats monitor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitats monitor could not be saved. Please, try again.'));
        }
        $activitats = $this->ActivitatsMonitors->Activitats->find('list', limit: 200)->all();
        $monitors = $this->ActivitatsMonitors->Monitors->find('list', limit: 200)->all();
        $activitatsgrups = $this->ActivitatsMonitors->Activitatsgrups->find('list', limit: 200)->all();
        $this->set(compact('activitatsMonitor', 'activitats', 'monitors', 'activitatsgrups'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Activitats Monitor id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $activitatsMonitor = $this->ActivitatsMonitors->get($id, contain: ['Activitatsgrups']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $activitatsMonitor = $this->ActivitatsMonitors->patchEntity($activitatsMonitor, $this->request->getData());
            if ($this->ActivitatsMonitors->save($activitatsMonitor)) {
                $this->Flash->success(__('The activitats monitor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitats monitor could not be saved. Please, try again.'));
        }
        $activitats = $this->ActivitatsMonitors->Activitats->find('list', limit: 200)->all();
        $monitors = $this->ActivitatsMonitors->Monitors->find('list', limit: 200)->all();
        $activitatsgrups = $this->ActivitatsMonitors->Activitatsgrups->find('list', limit: 200)->all();
        $this->set(compact('activitatsMonitor', 'activitats', 'monitors', 'activitatsgrups'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Activitats Monitor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $activitatsMonitor = $this->ActivitatsMonitors->get($id);
        if ($this->ActivitatsMonitors->delete($activitatsMonitor)) {
            $this->Flash->success(__('The activitats monitor has been deleted.'));
        } else {
            $this->Flash->error(__('The activitats monitor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
