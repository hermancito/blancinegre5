<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ofertaspreciosacts Controller
 *
 * @property \App\Model\Table\OfertaspreciosactsTable $Ofertaspreciosacts
 */
class OfertaspreciosactsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Ofertaspreciosacts->find();
        $ofertaspreciosacts = $this->paginate($query);

        $this->set(compact('ofertaspreciosacts'));
    }

    /**
     * View method
     *
     * @param string|null $id Ofertaspreciosact id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ofertaspreciosact = $this->Ofertaspreciosacts->get($id, contain: ['Ofertas']);
        $this->set(compact('ofertaspreciosact'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ofertaspreciosact = $this->Ofertaspreciosacts->newEmptyEntity();
        if ($this->request->is('post')) {
            $ofertaspreciosact = $this->Ofertaspreciosacts->patchEntity($ofertaspreciosact, $this->request->getData());
            if ($this->Ofertaspreciosacts->save($ofertaspreciosact)) {
                $this->Flash->success(__('The ofertaspreciosact has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ofertaspreciosact could not be saved. Please, try again.'));
        }
        $ofertas = $this->Ofertaspreciosacts->Ofertas->find('list', limit: 200)->all();
        $this->set(compact('ofertaspreciosact', 'ofertas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ofertaspreciosact id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ofertaspreciosact = $this->Ofertaspreciosacts->get($id, contain: ['Ofertas']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ofertaspreciosact = $this->Ofertaspreciosacts->patchEntity($ofertaspreciosact, $this->request->getData());
            if ($this->Ofertaspreciosacts->save($ofertaspreciosact)) {
                $this->Flash->success(__('The ofertaspreciosact has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ofertaspreciosact could not be saved. Please, try again.'));
        }
        $ofertas = $this->Ofertaspreciosacts->Ofertas->find('list', limit: 200)->all();
        $this->set(compact('ofertaspreciosact', 'ofertas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ofertaspreciosact id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ofertaspreciosact = $this->Ofertaspreciosacts->get($id);
        if ($this->Ofertaspreciosacts->delete($ofertaspreciosact)) {
            $this->Flash->success(__('The ofertaspreciosact has been deleted.'));
        } else {
            $this->Flash->error(__('The ofertaspreciosact could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
