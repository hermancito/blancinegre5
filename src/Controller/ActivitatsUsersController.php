<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ActivitatsUsers Controller
 *
 * @property \App\Model\Table\ActivitatsUsersTable $ActivitatsUsers
 */
class ActivitatsUsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->ActivitatsUsers->find()
            ->contain(['Activitats', 'Users']);
        $activitatsUsers = $this->paginate($query);

        $this->set(compact('activitatsUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Activitats User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $activitatsUser = $this->ActivitatsUsers->get($id, contain: ['Activitats', 'Users']);
        $this->set(compact('activitatsUser'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $activitatsUser = $this->ActivitatsUsers->newEmptyEntity();
        if ($this->request->is('post')) {
            $activitatsUser = $this->ActivitatsUsers->patchEntity($activitatsUser, $this->request->getData());
            if ($this->ActivitatsUsers->save($activitatsUser)) {
                $this->Flash->success(__('The activitats user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitats user could not be saved. Please, try again.'));
        }
        $activitats = $this->ActivitatsUsers->Activitats->find('list', limit: 200)->all();
        $users = $this->ActivitatsUsers->Users->find('list', limit: 200)->all();
        $this->set(compact('activitatsUser', 'activitats', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Activitats User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $activitatsUser = $this->ActivitatsUsers->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $activitatsUser = $this->ActivitatsUsers->patchEntity($activitatsUser, $this->request->getData());
            if ($this->ActivitatsUsers->save($activitatsUser)) {
                $this->Flash->success(__('The activitats user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitats user could not be saved. Please, try again.'));
        }
        $activitats = $this->ActivitatsUsers->Activitats->find('list', limit: 200)->all();
        $users = $this->ActivitatsUsers->Users->find('list', limit: 200)->all();
        $this->set(compact('activitatsUser', 'activitats', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Activitats User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $activitatsUser = $this->ActivitatsUsers->get($id);
        if ($this->ActivitatsUsers->delete($activitatsUser)) {
            $this->Flash->success(__('The activitats user has been deleted.'));
        } else {
            $this->Flash->error(__('The activitats user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
