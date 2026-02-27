<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Notificacions Controller
 *
 * @property \App\Model\Table\NotificacionsTable $Notificacions
 */
class NotificacionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Notificacions->find()
            ->contain(['Users', 'Colegios', 'Activitats']);
        $notificacions = $this->paginate($query);

        $this->set(compact('notificacions'));
    }

    /**
     * View method
     *
     * @param string|null $id Notificacion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $notificacion = $this->Notificacions->get($id, contain: ['Users', 'Colegios', 'Activitats', 'Notificacionpdfs']);
        $this->set(compact('notificacion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $notificacion = $this->Notificacions->newEmptyEntity();
        if ($this->request->is('post')) {
            $notificacion = $this->Notificacions->patchEntity($notificacion, $this->request->getData());
            if ($this->Notificacions->save($notificacion)) {
                $this->Flash->success(__('The notificacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notificacion could not be saved. Please, try again.'));
        }
        $users = $this->Notificacions->Users->find('list', limit: 200)->all();
        $colegios = $this->Notificacions->Colegios->find('list', limit: 200)->all();
        $activitats = $this->Notificacions->Activitats->find('list', limit: 200)->all();
        $this->set(compact('notificacion', 'users', 'colegios', 'activitats'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Notificacion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $notificacion = $this->Notificacions->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $notificacion = $this->Notificacions->patchEntity($notificacion, $this->request->getData());
            if ($this->Notificacions->save($notificacion)) {
                $this->Flash->success(__('The notificacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notificacion could not be saved. Please, try again.'));
        }
        $users = $this->Notificacions->Users->find('list', limit: 200)->all();
        $colegios = $this->Notificacions->Colegios->find('list', limit: 200)->all();
        $activitats = $this->Notificacions->Activitats->find('list', limit: 200)->all();
        $this->set(compact('notificacion', 'users', 'colegios', 'activitats'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Notificacion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $notificacion = $this->Notificacions->get($id);
        if ($this->Notificacions->delete($notificacion)) {
            $this->Flash->success(__('The notificacion has been deleted.'));
        } else {
            $this->Flash->error(__('The notificacion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
