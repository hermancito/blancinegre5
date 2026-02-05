<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * DestinosUsers Controller
 *
 * @property \App\Model\Table\DestinosUsersTable $DestinosUsers
 */
class DestinosUsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->DestinosUsers->find()
            ->contain(['Destinos', 'Users']);
        $destinosUsers = $this->paginate($query);

        $this->set(compact('destinosUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Destinos User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $destinosUser = $this->DestinosUsers->get($id, contain: ['Destinos', 'Users']);
        $this->set(compact('destinosUser'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $destinosUser = $this->DestinosUsers->newEmptyEntity();
        if ($this->request->is('post')) {
            $destinosUser = $this->DestinosUsers->patchEntity($destinosUser, $this->request->getData());
            if ($this->DestinosUsers->save($destinosUser)) {
                $this->Flash->success(__('The destinos user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The destinos user could not be saved. Please, try again.'));
        }
        $destinos = $this->DestinosUsers->Destinos->find('list', limit: 200)->all();
        $users = $this->DestinosUsers->Users->find('list', limit: 200)->all();
        $this->set(compact('destinosUser', 'destinos', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Destinos User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $destinosUser = $this->DestinosUsers->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $destinosUser = $this->DestinosUsers->patchEntity($destinosUser, $this->request->getData());
            if ($this->DestinosUsers->save($destinosUser)) {
                $this->Flash->success(__('The destinos user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The destinos user could not be saved. Please, try again.'));
        }
        $destinos = $this->DestinosUsers->Destinos->find('list', limit: 200)->all();
        $users = $this->DestinosUsers->Users->find('list', limit: 200)->all();
        $this->set(compact('destinosUser', 'destinos', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Destinos User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $destinosUser = $this->DestinosUsers->get($id);
        if ($this->DestinosUsers->delete($destinosUser)) {
            $this->Flash->success(__('The destinos user has been deleted.'));
        } else {
            $this->Flash->error(__('The destinos user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
