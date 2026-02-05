<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ActivitatsDias Controller
 *
 * @property \App\Model\Table\ActivitatsDiasTable $ActivitatsDias
 */
class ActivitatsDiasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->ActivitatsDias->find()
            ->contain(['Activitats', 'Dias']);
        $activitatsDias = $this->paginate($query);

        $this->set(compact('activitatsDias'));
    }

    /**
     * View method
     *
     * @param string|null $id Activitats Dia id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $activitatsDia = $this->ActivitatsDias->get($id, contain: ['Activitats', 'Dias']);
        $this->set(compact('activitatsDia'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $activitatsDia = $this->ActivitatsDias->newEmptyEntity();
        if ($this->request->is('post')) {
            $activitatsDia = $this->ActivitatsDias->patchEntity($activitatsDia, $this->request->getData());
            if ($this->ActivitatsDias->save($activitatsDia)) {
                $this->Flash->success(__('The activitats dia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitats dia could not be saved. Please, try again.'));
        }
        $activitats = $this->ActivitatsDias->Activitats->find('list', limit: 200)->all();
        $dias = $this->ActivitatsDias->Dias->find('list', limit: 200)->all();
        $this->set(compact('activitatsDia', 'activitats', 'dias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Activitats Dia id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $activitatsDia = $this->ActivitatsDias->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $activitatsDia = $this->ActivitatsDias->patchEntity($activitatsDia, $this->request->getData());
            if ($this->ActivitatsDias->save($activitatsDia)) {
                $this->Flash->success(__('The activitats dia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitats dia could not be saved. Please, try again.'));
        }
        $activitats = $this->ActivitatsDias->Activitats->find('list', limit: 200)->all();
        $dias = $this->ActivitatsDias->Dias->find('list', limit: 200)->all();
        $this->set(compact('activitatsDia', 'activitats', 'dias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Activitats Dia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $activitatsDia = $this->ActivitatsDias->get($id);
        if ($this->ActivitatsDias->delete($activitatsDia)) {
            $this->Flash->success(__('The activitats dia has been deleted.'));
        } else {
            $this->Flash->error(__('The activitats dia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
