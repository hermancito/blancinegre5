<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ColegiosMonitors Controller
 *
 * @property \App\Model\Table\ColegiosMonitorsTable $ColegiosMonitors
 */
class ColegiosMonitorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->ColegiosMonitors->find()
            ->contain(['Colegios', 'Monitors']);
        $colegiosMonitors = $this->paginate($query);

        $this->set(compact('colegiosMonitors'));
    }

    /**
     * View method
     *
     * @param string|null $id Colegios Monitor id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $colegiosMonitor = $this->ColegiosMonitors->get($id, contain: ['Colegios', 'Monitors']);
        $this->set(compact('colegiosMonitor'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $colegiosMonitor = $this->ColegiosMonitors->newEmptyEntity();
        if ($this->request->is('post')) {
            $colegiosMonitor = $this->ColegiosMonitors->patchEntity($colegiosMonitor, $this->request->getData());
            if ($this->ColegiosMonitors->save($colegiosMonitor)) {
                $this->Flash->success(__('The colegios monitor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The colegios monitor could not be saved. Please, try again.'));
        }
        $colegios = $this->ColegiosMonitors->Colegios->find('list', limit: 200)->all();
        $monitors = $this->ColegiosMonitors->Monitors->find('list', limit: 200)->all();
        $this->set(compact('colegiosMonitor', 'colegios', 'monitors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Colegios Monitor id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $colegiosMonitor = $this->ColegiosMonitors->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $colegiosMonitor = $this->ColegiosMonitors->patchEntity($colegiosMonitor, $this->request->getData());
            if ($this->ColegiosMonitors->save($colegiosMonitor)) {
                $this->Flash->success(__('The colegios monitor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The colegios monitor could not be saved. Please, try again.'));
        }
        $colegios = $this->ColegiosMonitors->Colegios->find('list', limit: 200)->all();
        $monitors = $this->ColegiosMonitors->Monitors->find('list', limit: 200)->all();
        $this->set(compact('colegiosMonitor', 'colegios', 'monitors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Colegios Monitor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $colegiosMonitor = $this->ColegiosMonitors->get($id);
        if ($this->ColegiosMonitors->delete($colegiosMonitor)) {
            $this->Flash->success(__('The colegios monitor has been deleted.'));
        } else {
            $this->Flash->error(__('The colegios monitor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
