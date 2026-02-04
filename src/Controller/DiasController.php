<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Dias Controller
 *
 * @property \App\Model\Table\DiasTable $Dias
 */
class DiasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Dias->find();
        $dias = $this->paginate($query);

        $this->set(compact('dias'));
    }

    /**
     * View method
     *
     * @param string|null $id Dia id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dia = $this->Dias->get($id, contain: ['Activitats', 'Activitatsgrups', 'Volantes', 'Disponibilitats']);
        $this->set(compact('dia'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dia = $this->Dias->newEmptyEntity();
        if ($this->request->is('post')) {
            $dia = $this->Dias->patchEntity($dia, $this->request->getData());
            if ($this->Dias->save($dia)) {
                $this->Flash->success(__('The dia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dia could not be saved. Please, try again.'));
        }
        $activitats = $this->Dias->Activitats->find('list', limit: 200)->all();
        $activitatsgrups = $this->Dias->Activitatsgrups->find('list', limit: 200)->all();
        $volantes = $this->Dias->Volantes->find('list', limit: 200)->all();
        $this->set(compact('dia', 'activitats', 'activitatsgrups', 'volantes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dia id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dia = $this->Dias->get($id, contain: ['Activitats', 'Activitatsgrups', 'Volantes']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dia = $this->Dias->patchEntity($dia, $this->request->getData());
            if ($this->Dias->save($dia)) {
                $this->Flash->success(__('The dia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dia could not be saved. Please, try again.'));
        }
        $activitats = $this->Dias->Activitats->find('list', limit: 200)->all();
        $activitatsgrups = $this->Dias->Activitatsgrups->find('list', limit: 200)->all();
        $volantes = $this->Dias->Volantes->find('list', limit: 200)->all();
        $this->set(compact('dia', 'activitats', 'activitatsgrups', 'volantes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dia = $this->Dias->get($id);
        if ($this->Dias->delete($dia)) {
            $this->Flash->success(__('The dia has been deleted.'));
        } else {
            $this->Flash->error(__('The dia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
