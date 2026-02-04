<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Monitors Controller
 *
 * @property \App\Model\Table\MonitorsTable $Monitors
 */
class MonitorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Monitors->find();
        $monitors = $this->paginate($query);

        $this->set(compact('monitors'));
    }

    /**
     * View method
     *
     * @param string|null $id Monitor id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $monitor = $this->Monitors->get($id, contain: ['Activitats', 'Activitatsgrups', 'Colegios', 'Coordinadors', 'Disponibilitats', 'Monitorsfiles', 'Sustitucions', 'Volantes']);
        $this->set(compact('monitor'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $monitor = $this->Monitors->newEmptyEntity();
        if ($this->request->is('post')) {
            $monitor = $this->Monitors->patchEntity($monitor, $this->request->getData());
            if ($this->Monitors->save($monitor)) {
                $this->Flash->success(__('The monitor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The monitor could not be saved. Please, try again.'));
        }
        $activitats = $this->Monitors->Activitats->find('list', limit: 200)->all();
        $activitatsgrups = $this->Monitors->Activitatsgrups->find('list', limit: 200)->all();
        $colegios = $this->Monitors->Colegios->find('list', limit: 200)->all();
        $coordinadors = $this->Monitors->Coordinadors->find('list', limit: 200)->all();
        $this->set(compact('monitor', 'activitats', 'activitatsgrups', 'colegios', 'coordinadors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Monitor id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $monitor = $this->Monitors->get($id, contain: ['Activitats', 'Activitatsgrups', 'Colegios', 'Coordinadors']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $monitor = $this->Monitors->patchEntity($monitor, $this->request->getData());
            if ($this->Monitors->save($monitor)) {
                $this->Flash->success(__('The monitor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The monitor could not be saved. Please, try again.'));
        }
        $activitats = $this->Monitors->Activitats->find('list', limit: 200)->all();
        $activitatsgrups = $this->Monitors->Activitatsgrups->find('list', limit: 200)->all();
        $colegios = $this->Monitors->Colegios->find('list', limit: 200)->all();
        $coordinadors = $this->Monitors->Coordinadors->find('list', limit: 200)->all();
        $this->set(compact('monitor', 'activitats', 'activitatsgrups', 'colegios', 'coordinadors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Monitor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $monitor = $this->Monitors->get($id);
        if ($this->Monitors->delete($monitor)) {
            $this->Flash->success(__('The monitor has been deleted.'));
        } else {
            $this->Flash->error(__('The monitor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
