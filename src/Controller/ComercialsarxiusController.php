<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Comercialsarxius Controller
 *
 * @property \App\Model\Table\ComercialsarxiusTable $Comercialsarxius
 */
class ComercialsarxiusController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Comercialsarxius->find()
            ->contain(['Comercials']);
        $comercialsarxius = $this->paginate($query);

        $this->set(compact('comercialsarxius'));
    }

    /**
     * View method
     *
     * @param string|null $id Comercialsarxius id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comercialsarxius = $this->Comercialsarxius->get($id, contain: ['Comercials']);
        $this->set(compact('comercialsarxius'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $comercialsarxius = $this->Comercialsarxius->newEmptyEntity();
        if ($this->request->is('post')) {
            $comercialsarxius = $this->Comercialsarxius->patchEntity($comercialsarxius, $this->request->getData());
            if ($this->Comercialsarxius->save($comercialsarxius)) {
                $this->Flash->success(__('The comercialsarxius has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comercialsarxius could not be saved. Please, try again.'));
        }
        $comercials = $this->Comercialsarxius->Comercials->find('list', limit: 200)->all();
        $this->set(compact('comercialsarxius', 'comercials'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Comercialsarxius id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $comercialsarxius = $this->Comercialsarxius->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comercialsarxius = $this->Comercialsarxius->patchEntity($comercialsarxius, $this->request->getData());
            if ($this->Comercialsarxius->save($comercialsarxius)) {
                $this->Flash->success(__('The comercialsarxius has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comercialsarxius could not be saved. Please, try again.'));
        }
        $comercials = $this->Comercialsarxius->Comercials->find('list', limit: 200)->all();
        $this->set(compact('comercialsarxius', 'comercials'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Comercialsarxius id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comercialsarxius = $this->Comercialsarxius->get($id);
        if ($this->Comercialsarxius->delete($comercialsarxius)) {
            $this->Flash->success(__('The comercialsarxius has been deleted.'));
        } else {
            $this->Flash->error(__('The comercialsarxius could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
