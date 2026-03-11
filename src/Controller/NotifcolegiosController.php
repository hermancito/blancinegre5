<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Notifcolegios Controller
 *
 * @property \App\Model\Table\NotifcolegiosTable $Notifcolegios
 */
class NotifcolegiosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Notifcolegios->find()
            ->contain(['Users']);
        $notifcolegios = $this->paginate($query);
        $colegios = $this->Notifcolegios->Colegios->find('list')->order(['username'=>'ASC']);


        $this->set(compact('notifcolegios', 'colegios'));
    }

    /**
     * View method
     *
     * @param string|null $id Notifcolegio id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $notifcolegio = $this->Notifcolegios->get($id, contain: ['Users', 'Colegios']);
        $this->set(compact('notifcolegio'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $notifcolegio = $this->Notifcolegios->newEmptyEntity();
        if ($this->request->is('post')) {
            $notifcolegio = $this->Notifcolegios->patchEntity($notifcolegio, $this->request->getData());
            if ($this->Notifcolegios->save($notifcolegio)) {
                $this->Flash->success(__('The notifcolegio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notifcolegio could not be saved. Please, try again.'));
        }
        $users = $this->Notifcolegios->Users->find('list', limit: 200)->all();
        $colegios = $this->Notifcolegios->Colegios->find('list', limit: 200)->all();
        $this->set(compact('notifcolegio', 'users', 'colegios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Notifcolegio id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $notifcolegio = $this->Notifcolegios->get($id, contain: ['Colegios']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $notifcolegio = $this->Notifcolegios->patchEntity($notifcolegio, $this->request->getData());
            if ($this->Notifcolegios->save($notifcolegio)) {
                $this->Flash->success(__('The notifcolegio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notifcolegio could not be saved. Please, try again.'));
        }
        $users = $this->Notifcolegios->Users->find('list', limit: 200)->all();
        $colegios = $this->Notifcolegios->Colegios->find('list', limit: 200)->all();
        $this->set(compact('notifcolegio', 'users', 'colegios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Notifcolegio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $notifcolegio = $this->Notifcolegios->get($id);
        if ($this->Notifcolegios->delete($notifcolegio)) {
            $this->Flash->success(__('The notifcolegio has been deleted.'));
        } else {
            $this->Flash->error(__('The notifcolegio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
