<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ActivitatsgrupsMonitors Controller
 *
 * @property \App\Model\Table\ActivitatsgrupsMonitorsTable $ActivitatsgrupsMonitors
 */
class ActivitatsgrupsMonitorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->ActivitatsgrupsMonitors->find()
            ->contain(['Activitatsgrups', 'Monitors']);
        $activitatsgrupsMonitors = $this->paginate($query);

        $this->set(compact('activitatsgrupsMonitors'));
    }

    /**
     * View method
     *
     * @param string|null $id Activitatsgrups Monitor id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $activitatsgrupsMonitor = $this->ActivitatsgrupsMonitors->get($id, contain: ['Activitatsgrups', 'Monitors']);
        $this->set(compact('activitatsgrupsMonitor'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $activitatsgrupsMonitor = $this->ActivitatsgrupsMonitors->newEmptyEntity();
        if ($this->request->is('post')) {
            $activitatsgrupsMonitor = $this->ActivitatsgrupsMonitors->patchEntity($activitatsgrupsMonitor, $this->request->getData());
            if ($this->ActivitatsgrupsMonitors->save($activitatsgrupsMonitor)) {
                $this->Flash->success(__('The activitatsgrups monitor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitatsgrups monitor could not be saved. Please, try again.'));
        }
        $activitatsgrups = $this->ActivitatsgrupsMonitors->Activitatsgrups->find('list', limit: 200)->all();
        $monitors = $this->ActivitatsgrupsMonitors->Monitors->find('list', limit: 200)->all();
        $this->set(compact('activitatsgrupsMonitor', 'activitatsgrups', 'monitors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Activitatsgrups Monitor id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $activitatsgrupsMonitor = $this->ActivitatsgrupsMonitors->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $activitatsgrupsMonitor = $this->ActivitatsgrupsMonitors->patchEntity($activitatsgrupsMonitor, $this->request->getData());
            if ($this->ActivitatsgrupsMonitors->save($activitatsgrupsMonitor)) {
                $this->Flash->success(__('The activitatsgrups monitor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitatsgrups monitor could not be saved. Please, try again.'));
        }
        $activitatsgrups = $this->ActivitatsgrupsMonitors->Activitatsgrups->find('list', limit: 200)->all();
        $monitors = $this->ActivitatsgrupsMonitors->Monitors->find('list', limit: 200)->all();
        $this->set(compact('activitatsgrupsMonitor', 'activitatsgrups', 'monitors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Activitatsgrups Monitor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $activitatsgrupsMonitor = $this->ActivitatsgrupsMonitors->get($id);
        if ($this->ActivitatsgrupsMonitors->delete($activitatsgrupsMonitor)) {
            $this->Flash->success(__('The activitatsgrups monitor has been deleted.'));
        } else {
            $this->Flash->error(__('The activitatsgrups monitor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
