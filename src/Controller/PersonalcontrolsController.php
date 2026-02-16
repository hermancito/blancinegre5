<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Personalcontrols Controller
 *
 * @property \App\Model\Table\PersonalcontrolsTable $Personalcontrols
 */
class PersonalcontrolsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Personalcontrols->find()
            ->contain(['Users', 'Tipoincidencias', 'Actors', 'Colegios']);
        $personalcontrols = $this->paginate($query);

        $this->set(compact('personalcontrols'));
    }

    /**
     * View method
     *
     * @param string|null $id Personalcontrol id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $personalcontrol = $this->Personalcontrols->get($id, contain: ['Users', 'Tipoincidencias', 'Actors', 'Colegios']);
        $this->set(compact('personalcontrol'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $personalcontrol = $this->Personalcontrols->newEmptyEntity();
        if ($this->request->is('post')) {
            $personalcontrol = $this->Personalcontrols->patchEntity($personalcontrol, $this->request->getData());
            if ($this->Personalcontrols->save($personalcontrol)) {
                $this->Flash->success(__('The personalcontrol has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The personalcontrol could not be saved. Please, try again.'));
        }
        $users = $this->Personalcontrols->Users->find('list', limit: 200)->all();
        $tipoincidencias = $this->Personalcontrols->Tipoincidencias->find('list', limit: 200)->all();
        $actors = $this->Personalcontrols->Actors->find('list', limit: 200)->all();
        $colegios = $this->Personalcontrols->Colegios->find('list', limit: 200)->all();
        $this->set(compact('personalcontrol', 'users', 'tipoincidencias', 'actors', 'colegios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Personalcontrol id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $personalcontrol = $this->Personalcontrols->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $personalcontrol = $this->Personalcontrols->patchEntity($personalcontrol, $this->request->getData());
            if ($this->Personalcontrols->save($personalcontrol)) {
                $this->Flash->success(__('The personalcontrol has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The personalcontrol could not be saved. Please, try again.'));
        }
        $users = $this->Personalcontrols->Users->find('list', limit: 200)->all();
        $tipoincidencias = $this->Personalcontrols->Tipoincidencias->find('list', limit: 200)->all();
        $actors = $this->Personalcontrols->Actors->find('list', limit: 200)->all();
        $colegios = $this->Personalcontrols->Colegios->find('list', limit: 200)->all();
        $this->set(compact('personalcontrol', 'users', 'tipoincidencias', 'actors', 'colegios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Personalcontrol id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $personalcontrol = $this->Personalcontrols->get($id);
        if ($this->Personalcontrols->delete($personalcontrol)) {
            $this->Flash->success(__('The personalcontrol has been deleted.'));
        } else {
            $this->Flash->error(__('The personalcontrol could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
