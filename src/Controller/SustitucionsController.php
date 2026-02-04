<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Sustitucions Controller
 *
 * @property \App\Model\Table\SustitucionsTable $Sustitucions
 */
class SustitucionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Sustitucions->find()
            ->contain(['Monitors', 'Colegios', 'Activitats', 'Users']);
        $sustitucions = $this->paginate($query);

        $this->set(compact('sustitucions'));
    }

    /**
     * View method
     *
     * @param string|null $id Sustitucion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sustitucion = $this->Sustitucions->get($id, contain: ['Monitors', 'Colegios', 'Activitats', 'Users']);
        $this->set(compact('sustitucion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sustitucion = $this->Sustitucions->newEmptyEntity();
        if ($this->request->is('post')) {
            $sustitucion = $this->Sustitucions->patchEntity($sustitucion, $this->request->getData());
            if ($this->Sustitucions->save($sustitucion)) {
                $this->Flash->success(__('The sustitucion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sustitucion could not be saved. Please, try again.'));
        }
        $monitors = $this->Sustitucions->Monitors->find('list', limit: 200)->all();
        $colegios = $this->Sustitucions->Colegios->find('list', limit: 200)->all();
        $activitats = $this->Sustitucions->Activitats->find('list', limit: 200)->all();
        $users = $this->Sustitucions->Users->find('list', limit: 200)->all();
        $this->set(compact('sustitucion', 'monitors', 'colegios', 'activitats', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sustitucion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sustitucion = $this->Sustitucions->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sustitucion = $this->Sustitucions->patchEntity($sustitucion, $this->request->getData());
            if ($this->Sustitucions->save($sustitucion)) {
                $this->Flash->success(__('The sustitucion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sustitucion could not be saved. Please, try again.'));
        }
        $monitors = $this->Sustitucions->Monitors->find('list', limit: 200)->all();
        $colegios = $this->Sustitucions->Colegios->find('list', limit: 200)->all();
        $activitats = $this->Sustitucions->Activitats->find('list', limit: 200)->all();
        $users = $this->Sustitucions->Users->find('list', limit: 200)->all();
        $this->set(compact('sustitucion', 'monitors', 'colegios', 'activitats', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sustitucion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sustitucion = $this->Sustitucions->get($id);
        if ($this->Sustitucions->delete($sustitucion)) {
            $this->Flash->success(__('The sustitucion has been deleted.'));
        } else {
            $this->Flash->error(__('The sustitucion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
