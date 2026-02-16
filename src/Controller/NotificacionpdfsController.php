<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Notificacionpdfs Controller
 *
 * @property \App\Model\Table\NotificacionpdfsTable $Notificacionpdfs
 */
class NotificacionpdfsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Notificacionpdfs->find()
            ->contain(['Users', 'Notificacions']);
        $notificacionpdfs = $this->paginate($query);

        $this->set(compact('notificacionpdfs'));
    }

    /**
     * View method
     *
     * @param string|null $id Notificacionpdf id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $notificacionpdf = $this->Notificacionpdfs->get($id, contain: ['Users', 'Notificacions']);
        $this->set(compact('notificacionpdf'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $notificacionpdf = $this->Notificacionpdfs->newEmptyEntity();
        if ($this->request->is('post')) {
            $notificacionpdf = $this->Notificacionpdfs->patchEntity($notificacionpdf, $this->request->getData());
            if ($this->Notificacionpdfs->save($notificacionpdf)) {
                $this->Flash->success(__('The notificacionpdf has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notificacionpdf could not be saved. Please, try again.'));
        }
        $users = $this->Notificacionpdfs->Users->find('list', limit: 200)->all();
        $notificacions = $this->Notificacionpdfs->Notificacions->find('list', limit: 200)->all();
        $this->set(compact('notificacionpdf', 'users', 'notificacions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Notificacionpdf id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $notificacionpdf = $this->Notificacionpdfs->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $notificacionpdf = $this->Notificacionpdfs->patchEntity($notificacionpdf, $this->request->getData());
            if ($this->Notificacionpdfs->save($notificacionpdf)) {
                $this->Flash->success(__('The notificacionpdf has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notificacionpdf could not be saved. Please, try again.'));
        }
        $users = $this->Notificacionpdfs->Users->find('list', limit: 200)->all();
        $notificacions = $this->Notificacionpdfs->Notificacions->find('list', limit: 200)->all();
        $this->set(compact('notificacionpdf', 'users', 'notificacions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Notificacionpdf id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $notificacionpdf = $this->Notificacionpdfs->get($id);
        if ($this->Notificacionpdfs->delete($notificacionpdf)) {
            $this->Flash->success(__('The notificacionpdf has been deleted.'));
        } else {
            $this->Flash->error(__('The notificacionpdf could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
