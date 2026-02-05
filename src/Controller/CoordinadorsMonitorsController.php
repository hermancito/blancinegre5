<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CoordinadorsMonitors Controller
 *
 * @property \App\Model\Table\CoordinadorsMonitorsTable $CoordinadorsMonitors
 */
class CoordinadorsMonitorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->CoordinadorsMonitors->find()
            ->contain(['Coordinadors', 'Monitors']);
        $coordinadorsMonitors = $this->paginate($query);

        $this->set(compact('coordinadorsMonitors'));
    }

    /**
     * View method
     *
     * @param string|null $id Coordinadors Monitor id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coordinadorsMonitor = $this->CoordinadorsMonitors->get($id, contain: ['Coordinadors', 'Monitors']);
        $this->set(compact('coordinadorsMonitor'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coordinadorsMonitor = $this->CoordinadorsMonitors->newEmptyEntity();
        if ($this->request->is('post')) {
            $coordinadorsMonitor = $this->CoordinadorsMonitors->patchEntity($coordinadorsMonitor, $this->request->getData());
            if ($this->CoordinadorsMonitors->save($coordinadorsMonitor)) {
                $this->Flash->success(__('The coordinadors monitor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coordinadors monitor could not be saved. Please, try again.'));
        }
        $coordinadors = $this->CoordinadorsMonitors->Coordinadors->find('list', limit: 200)->all();
        $monitors = $this->CoordinadorsMonitors->Monitors->find('list', limit: 200)->all();
        $this->set(compact('coordinadorsMonitor', 'coordinadors', 'monitors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Coordinadors Monitor id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coordinadorsMonitor = $this->CoordinadorsMonitors->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coordinadorsMonitor = $this->CoordinadorsMonitors->patchEntity($coordinadorsMonitor, $this->request->getData());
            if ($this->CoordinadorsMonitors->save($coordinadorsMonitor)) {
                $this->Flash->success(__('The coordinadors monitor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coordinadors monitor could not be saved. Please, try again.'));
        }
        $coordinadors = $this->CoordinadorsMonitors->Coordinadors->find('list', limit: 200)->all();
        $monitors = $this->CoordinadorsMonitors->Monitors->find('list', limit: 200)->all();
        $this->set(compact('coordinadorsMonitor', 'coordinadors', 'monitors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Coordinadors Monitor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coordinadorsMonitor = $this->CoordinadorsMonitors->get($id);
        if ($this->CoordinadorsMonitors->delete($coordinadorsMonitor)) {
            $this->Flash->success(__('The coordinadors monitor has been deleted.'));
        } else {
            $this->Flash->error(__('The coordinadors monitor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
