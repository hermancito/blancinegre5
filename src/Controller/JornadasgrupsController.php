<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Jornadasgrups Controller
 *
 * @property \App\Model\Table\JornadasgrupsTable $Jornadasgrups
 */
class JornadasgrupsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Jornadasgrups->find();
        $jornadasgrups = $this->paginate($query);

        $this->set(compact('jornadasgrups'));
    }

    /**
     * View method
     *
     * @param string|null $id Jornadasgrup id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jornadasgrup = $this->Jornadasgrups->get($id, contain: ['Activitatsgrups']);
        $this->set(compact('jornadasgrup'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jornadasgrup = $this->Jornadasgrups->newEmptyEntity();
        if ($this->request->is('post')) {
            $jornadasgrup = $this->Jornadasgrups->patchEntity($jornadasgrup, $this->request->getData());
            if ($this->Jornadasgrups->save($jornadasgrup)) {
                $this->Flash->success(__('The jornadasgrup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jornadasgrup could not be saved. Please, try again.'));
        }
        $activitatsgrups = $this->Jornadasgrups->Activitatsgrups->find('list', limit: 200)->all();
        $this->set(compact('jornadasgrup', 'activitatsgrups'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Jornadasgrup id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jornadasgrup = $this->Jornadasgrups->get($id, contain: ['Activitatsgrups']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jornadasgrup = $this->Jornadasgrups->patchEntity($jornadasgrup, $this->request->getData());
            if ($this->Jornadasgrups->save($jornadasgrup)) {
                $this->Flash->success(__('The jornadasgrup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jornadasgrup could not be saved. Please, try again.'));
        }
        $activitatsgrups = $this->Jornadasgrups->Activitatsgrups->find('list', limit: 200)->all();
        $this->set(compact('jornadasgrup', 'activitatsgrups'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Jornadasgrup id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jornadasgrup = $this->Jornadasgrups->get($id);
        if ($this->Jornadasgrups->delete($jornadasgrup)) {
            $this->Flash->success(__('The jornadasgrup has been deleted.'));
        } else {
            $this->Flash->error(__('The jornadasgrup could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
