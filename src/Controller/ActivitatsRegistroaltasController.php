<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ActivitatsRegistroaltas Controller
 *
 * @property \App\Model\Table\ActivitatsRegistroaltasTable $ActivitatsRegistroaltas
 */
class ActivitatsRegistroaltasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->ActivitatsRegistroaltas->find()
            ->contain(['Registroaltas', 'Activitats']);
        $activitatsRegistroaltas = $this->paginate($query);

        $this->set(compact('activitatsRegistroaltas'));
    }

    /**
     * View method
     *
     * @param string|null $id Activitats Registroalta id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $activitatsRegistroalta = $this->ActivitatsRegistroaltas->get($id, contain: ['Registroaltas', 'Activitats']);
        $this->set(compact('activitatsRegistroalta'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $activitatsRegistroalta = $this->ActivitatsRegistroaltas->newEmptyEntity();
        if ($this->request->is('post')) {
            $activitatsRegistroalta = $this->ActivitatsRegistroaltas->patchEntity($activitatsRegistroalta, $this->request->getData());
            if ($this->ActivitatsRegistroaltas->save($activitatsRegistroalta)) {
                $this->Flash->success(__('The activitats registroalta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitats registroalta could not be saved. Please, try again.'));
        }
        $registroaltas = $this->ActivitatsRegistroaltas->Registroaltas->find('list', limit: 200)->all();
        $activitats = $this->ActivitatsRegistroaltas->Activitats->find('list', limit: 200)->all();
        $this->set(compact('activitatsRegistroalta', 'registroaltas', 'activitats'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Activitats Registroalta id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $activitatsRegistroalta = $this->ActivitatsRegistroaltas->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $activitatsRegistroalta = $this->ActivitatsRegistroaltas->patchEntity($activitatsRegistroalta, $this->request->getData());
            if ($this->ActivitatsRegistroaltas->save($activitatsRegistroalta)) {
                $this->Flash->success(__('The activitats registroalta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitats registroalta could not be saved. Please, try again.'));
        }
        $registroaltas = $this->ActivitatsRegistroaltas->Registroaltas->find('list', limit: 200)->all();
        $activitats = $this->ActivitatsRegistroaltas->Activitats->find('list', limit: 200)->all();
        $this->set(compact('activitatsRegistroalta', 'registroaltas', 'activitats'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Activitats Registroalta id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $activitatsRegistroalta = $this->ActivitatsRegistroaltas->get($id);
        if ($this->ActivitatsRegistroaltas->delete($activitatsRegistroalta)) {
            $this->Flash->success(__('The activitats registroalta has been deleted.'));
        } else {
            $this->Flash->error(__('The activitats registroalta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
