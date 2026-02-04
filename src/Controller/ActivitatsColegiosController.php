<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ActivitatsColegios Controller
 *
 * @property \App\Model\Table\ActivitatsColegiosTable $ActivitatsColegios
 */
class ActivitatsColegiosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->ActivitatsColegios->find()
            ->contain(['Activitats', 'Colegios']);
        $activitatsColegios = $this->paginate($query);

        $this->set(compact('activitatsColegios'));
    }

    /**
     * View method
     *
     * @param string|null $id Activitats Colegio id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $activitatsColegio = $this->ActivitatsColegios->get($id, contain: ['Activitats', 'Colegios']);
        $this->set(compact('activitatsColegio'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $activitatsColegio = $this->ActivitatsColegios->newEmptyEntity();
        if ($this->request->is('post')) {
            $activitatsColegio = $this->ActivitatsColegios->patchEntity($activitatsColegio, $this->request->getData());
            if ($this->ActivitatsColegios->save($activitatsColegio)) {
                $this->Flash->success(__('The activitats colegio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitats colegio could not be saved. Please, try again.'));
        }
        $activitats = $this->ActivitatsColegios->Activitats->find('list', limit: 200)->all();
        $colegios = $this->ActivitatsColegios->Colegios->find('list', limit: 200)->all();
        $this->set(compact('activitatsColegio', 'activitats', 'colegios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Activitats Colegio id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $activitatsColegio = $this->ActivitatsColegios->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $activitatsColegio = $this->ActivitatsColegios->patchEntity($activitatsColegio, $this->request->getData());
            if ($this->ActivitatsColegios->save($activitatsColegio)) {
                $this->Flash->success(__('The activitats colegio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitats colegio could not be saved. Please, try again.'));
        }
        $activitats = $this->ActivitatsColegios->Activitats->find('list', limit: 200)->all();
        $colegios = $this->ActivitatsColegios->Colegios->find('list', limit: 200)->all();
        $this->set(compact('activitatsColegio', 'activitats', 'colegios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Activitats Colegio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $activitatsColegio = $this->ActivitatsColegios->get($id);
        if ($this->ActivitatsColegios->delete($activitatsColegio)) {
            $this->Flash->success(__('The activitats colegio has been deleted.'));
        } else {
            $this->Flash->error(__('The activitats colegio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
