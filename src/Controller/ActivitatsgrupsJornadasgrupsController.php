<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ActivitatsgrupsJornadasgrups Controller
 *
 * @property \App\Model\Table\ActivitatsgrupsJornadasgrupsTable $ActivitatsgrupsJornadasgrups
 */
class ActivitatsgrupsJornadasgrupsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->ActivitatsgrupsJornadasgrups->find()
            ->contain(['Activitatsgrups', 'Jornadasgrups']);
        $activitatsgrupsJornadasgrups = $this->paginate($query);

        $this->set(compact('activitatsgrupsJornadasgrups'));
    }

    /**
     * View method
     *
     * @param string|null $id Activitatsgrups Jornadasgrup id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $activitatsgrupsJornadasgrup = $this->ActivitatsgrupsJornadasgrups->get($id, contain: ['Activitatsgrups', 'Jornadasgrups']);
        $this->set(compact('activitatsgrupsJornadasgrup'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $activitatsgrupsJornadasgrup = $this->ActivitatsgrupsJornadasgrups->newEmptyEntity();
        if ($this->request->is('post')) {
            $activitatsgrupsJornadasgrup = $this->ActivitatsgrupsJornadasgrups->patchEntity($activitatsgrupsJornadasgrup, $this->request->getData());
            if ($this->ActivitatsgrupsJornadasgrups->save($activitatsgrupsJornadasgrup)) {
                $this->Flash->success(__('The activitatsgrups jornadasgrup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitatsgrups jornadasgrup could not be saved. Please, try again.'));
        }
        $activitatsgrups = $this->ActivitatsgrupsJornadasgrups->Activitatsgrups->find('list', limit: 200)->all();
        $jornadasgrups = $this->ActivitatsgrupsJornadasgrups->Jornadasgrups->find('list', limit: 200)->all();
        $this->set(compact('activitatsgrupsJornadasgrup', 'activitatsgrups', 'jornadasgrups'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Activitatsgrups Jornadasgrup id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $activitatsgrupsJornadasgrup = $this->ActivitatsgrupsJornadasgrups->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $activitatsgrupsJornadasgrup = $this->ActivitatsgrupsJornadasgrups->patchEntity($activitatsgrupsJornadasgrup, $this->request->getData());
            if ($this->ActivitatsgrupsJornadasgrups->save($activitatsgrupsJornadasgrup)) {
                $this->Flash->success(__('The activitatsgrups jornadasgrup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activitatsgrups jornadasgrup could not be saved. Please, try again.'));
        }
        $activitatsgrups = $this->ActivitatsgrupsJornadasgrups->Activitatsgrups->find('list', limit: 200)->all();
        $jornadasgrups = $this->ActivitatsgrupsJornadasgrups->Jornadasgrups->find('list', limit: 200)->all();
        $this->set(compact('activitatsgrupsJornadasgrup', 'activitatsgrups', 'jornadasgrups'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Activitatsgrups Jornadasgrup id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $activitatsgrupsJornadasgrup = $this->ActivitatsgrupsJornadasgrups->get($id);
        if ($this->ActivitatsgrupsJornadasgrups->delete($activitatsgrupsJornadasgrup)) {
            $this->Flash->success(__('The activitatsgrups jornadasgrup has been deleted.'));
        } else {
            $this->Flash->error(__('The activitatsgrups jornadasgrup could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
