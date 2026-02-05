<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ActivitatsgrupsDias Controller
 *
 * @property \App\Model\Table\ActivitatsgrupsDiasTable $ActivitatsgrupsDias
 */
class ActivitatsgrupsDiasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->ActivitatsgrupsDias->find()
            ->contain(['Activitatsgrups', 'Dias']);
        $activitatsgrupsDias = $this->paginate($query);

        $this->set(compact('activitatsgrupsDias'));
    }

    /**
     * View method
     *
     * @param string|null $id Activitatsgrups Dia id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $activitatsgrupsDia = $this->ActivitatsgrupsDias->get($id, contain: ['Activitatsgrups', 'Dias']);
        $this->set(compact('activitatsgrupsDia'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $activitatsgrupsDia = $this->ActivitatsgrupsDias->newEmptyEntity();
        if ($this->request->is('post')) {
            $activitatsgrupsDia = $this->ActivitatsgrupsDias->patchEntity($activitatsgrupsDia, $this->request->getData());
            if ($this->ActivitatsgrupsDias->save($activitatsgrupsDia)) {
                $this->Flash->success(__('The activitatsgrups dia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitatsgrups dia could not be saved. Please, try again.'));
        }
        $activitatsgrups = $this->ActivitatsgrupsDias->Activitatsgrups->find('list', limit: 200)->all();
        $dias = $this->ActivitatsgrupsDias->Dias->find('list', limit: 200)->all();
        $this->set(compact('activitatsgrupsDia', 'activitatsgrups', 'dias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Activitatsgrups Dia id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $activitatsgrupsDia = $this->ActivitatsgrupsDias->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $activitatsgrupsDia = $this->ActivitatsgrupsDias->patchEntity($activitatsgrupsDia, $this->request->getData());
            if ($this->ActivitatsgrupsDias->save($activitatsgrupsDia)) {
                $this->Flash->success(__('The activitatsgrups dia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitatsgrups dia could not be saved. Please, try again.'));
        }
        $activitatsgrups = $this->ActivitatsgrupsDias->Activitatsgrups->find('list', limit: 200)->all();
        $dias = $this->ActivitatsgrupsDias->Dias->find('list', limit: 200)->all();
        $this->set(compact('activitatsgrupsDia', 'activitatsgrups', 'dias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Activitatsgrups Dia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $activitatsgrupsDia = $this->ActivitatsgrupsDias->get($id);
        if ($this->ActivitatsgrupsDias->delete($activitatsgrupsDia)) {
            $this->Flash->success(__('The activitatsgrups dia has been deleted.'));
        } else {
            $this->Flash->error(__('The activitatsgrups dia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
