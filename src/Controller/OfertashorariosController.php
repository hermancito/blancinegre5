<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ofertashorarios Controller
 *
 * @property \App\Model\Table\OfertashorariosTable $Ofertashorarios
 */
class OfertashorariosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Ofertashorarios->find();
        $ofertashorarios = $this->paginate($query);

        $this->set(compact('ofertashorarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Ofertashorario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ofertashorario = $this->Ofertashorarios->get($id, contain: ['OfertasOfertaspreciosacts']);
        $this->set(compact('ofertashorario'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ofertashorario = $this->Ofertashorarios->newEmptyEntity();
        if ($this->request->is('post')) {
            $ofertashorario = $this->Ofertashorarios->patchEntity($ofertashorario, $this->request->getData());
            if ($this->Ofertashorarios->save($ofertashorario)) {
                $this->Flash->success(__('The ofertashorario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ofertashorario could not be saved. Please, try again.'));
        }
        $this->set(compact('ofertashorario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ofertashorario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ofertashorario = $this->Ofertashorarios->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ofertashorario = $this->Ofertashorarios->patchEntity($ofertashorario, $this->request->getData());
            if ($this->Ofertashorarios->save($ofertashorario)) {
                $this->Flash->success(__('The ofertashorario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ofertashorario could not be saved. Please, try again.'));
        }
        $this->set(compact('ofertashorario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ofertashorario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ofertashorario = $this->Ofertashorarios->get($id);
        if ($this->Ofertashorarios->delete($ofertashorario)) {
            $this->Flash->success(__('The ofertashorario has been deleted.'));
        } else {
            $this->Flash->error(__('The ofertashorario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
