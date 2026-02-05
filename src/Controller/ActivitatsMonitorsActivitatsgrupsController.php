<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ActivitatsMonitorsActivitatsgrups Controller
 *
 * @property \App\Model\Table\ActivitatsMonitorsActivitatsgrupsTable $ActivitatsMonitorsActivitatsgrups
 */
class ActivitatsMonitorsActivitatsgrupsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->ActivitatsMonitorsActivitatsgrups->find()
            ->contain(['ActivitatsMonitors', 'Activitatsgrups']);
        $activitatsMonitorsActivitatsgrups = $this->paginate($query);

        $this->set(compact('activitatsMonitorsActivitatsgrups'));
    }

    /**
     * View method
     *
     * @param string|null $id Activitats Monitors Activitatsgrup id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $activitatsMonitorsActivitatsgrup = $this->ActivitatsMonitorsActivitatsgrups->get($id, contain: ['ActivitatsMonitors', 'Activitatsgrups']);
        $this->set(compact('activitatsMonitorsActivitatsgrup'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $activitatsMonitorsActivitatsgrup = $this->ActivitatsMonitorsActivitatsgrups->newEmptyEntity();
        if ($this->request->is('post')) {
            $activitatsMonitorsActivitatsgrup = $this->ActivitatsMonitorsActivitatsgrups->patchEntity($activitatsMonitorsActivitatsgrup, $this->request->getData());
            if ($this->ActivitatsMonitorsActivitatsgrups->save($activitatsMonitorsActivitatsgrup)) {
                $this->Flash->success(__('The activitats monitors activitatsgrup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitats monitors activitatsgrup could not be saved. Please, try again.'));
        }
        $activitatsMonitors = $this->ActivitatsMonitorsActivitatsgrups->ActivitatsMonitors->find('list', limit: 200)->all();
        $activitatsgrups = $this->ActivitatsMonitorsActivitatsgrups->Activitatsgrups->find('list', limit: 200)->all();
        $this->set(compact('activitatsMonitorsActivitatsgrup', 'activitatsMonitors', 'activitatsgrups'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Activitats Monitors Activitatsgrup id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $activitatsMonitorsActivitatsgrup = $this->ActivitatsMonitorsActivitatsgrups->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $activitatsMonitorsActivitatsgrup = $this->ActivitatsMonitorsActivitatsgrups->patchEntity($activitatsMonitorsActivitatsgrup, $this->request->getData());
            if ($this->ActivitatsMonitorsActivitatsgrups->save($activitatsMonitorsActivitatsgrup)) {
                $this->Flash->success(__('The activitats monitors activitatsgrup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitats monitors activitatsgrup could not be saved. Please, try again.'));
        }
        $activitatsMonitors = $this->ActivitatsMonitorsActivitatsgrups->ActivitatsMonitors->find('list', limit: 200)->all();
        $activitatsgrups = $this->ActivitatsMonitorsActivitatsgrups->Activitatsgrups->find('list', limit: 200)->all();
        $this->set(compact('activitatsMonitorsActivitatsgrup', 'activitatsMonitors', 'activitatsgrups'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Activitats Monitors Activitatsgrup id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $activitatsMonitorsActivitatsgrup = $this->ActivitatsMonitorsActivitatsgrups->get($id);
        if ($this->ActivitatsMonitorsActivitatsgrups->delete($activitatsMonitorsActivitatsgrup)) {
            $this->Flash->success(__('The activitats monitors activitatsgrup has been deleted.'));
        } else {
            $this->Flash->error(__('The activitats monitors activitatsgrup could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
