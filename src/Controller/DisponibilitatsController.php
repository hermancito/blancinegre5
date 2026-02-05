<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Disponibilitats Controller
 *
 * @property \App\Model\Table\DisponibilitatsTable $Disponibilitats
 */
class DisponibilitatsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Disponibilitats->find()
            ->contain(['Monitors', 'Dias', 'Horas', 'Tiponodisponibilitats', 'Activitatsgrups']);
        $disponibilitats = $this->paginate($query);

        $this->set(compact('disponibilitats'));
    }

    /**
     * View method
     *
     * @param string|null $id Disponibilitat id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $disponibilitat = $this->Disponibilitats->get($id, contain: ['Monitors', 'Dias', 'Horas', 'Tiponodisponibilitats', 'Activitatsgrups']);
        $this->set(compact('disponibilitat'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $disponibilitat = $this->Disponibilitats->newEmptyEntity();
        if ($this->request->is('post')) {
            $disponibilitat = $this->Disponibilitats->patchEntity($disponibilitat, $this->request->getData());
            if ($this->Disponibilitats->save($disponibilitat)) {
                $this->Flash->success(__('The disponibilitat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The disponibilitat could not be saved. Please, try again.'));
        }
        $monitors = $this->Disponibilitats->Monitors->find('list', limit: 200)->all();
        $dias = $this->Disponibilitats->Dias->find('list', limit: 200)->all();
        $horas = $this->Disponibilitats->Horas->find('list', limit: 200)->all();
        $tiponodisponibilitats = $this->Disponibilitats->Tiponodisponibilitats->find('list', limit: 200)->all();
        $activitatsgrups = $this->Disponibilitats->Activitatsgrups->find('list', limit: 200)->all();
        $this->set(compact('disponibilitat', 'monitors', 'dias', 'horas', 'tiponodisponibilitats', 'activitatsgrups'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Disponibilitat id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $disponibilitat = $this->Disponibilitats->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $disponibilitat = $this->Disponibilitats->patchEntity($disponibilitat, $this->request->getData());
            if ($this->Disponibilitats->save($disponibilitat)) {
                $this->Flash->success(__('The disponibilitat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The disponibilitat could not be saved. Please, try again.'));
        }
        $monitors = $this->Disponibilitats->Monitors->find('list', limit: 200)->all();
        $dias = $this->Disponibilitats->Dias->find('list', limit: 200)->all();
        $horas = $this->Disponibilitats->Horas->find('list', limit: 200)->all();
        $tiponodisponibilitats = $this->Disponibilitats->Tiponodisponibilitats->find('list', limit: 200)->all();
        $activitatsgrups = $this->Disponibilitats->Activitatsgrups->find('list', limit: 200)->all();
        $this->set(compact('disponibilitat', 'monitors', 'dias', 'horas', 'tiponodisponibilitats', 'activitatsgrups'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Disponibilitat id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $disponibilitat = $this->Disponibilitats->get($id);
        if ($this->Disponibilitats->delete($disponibilitat)) {
            $this->Flash->success(__('The disponibilitat has been deleted.'));
        } else {
            $this->Flash->error(__('The disponibilitat could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
