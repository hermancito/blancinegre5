<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ofertas Controller
 *
 * @property \App\Model\Table\OfertasTable $Ofertas
 */
class OfertasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Ofertas->find()
            ->contain(['Comercials', 'Ubicacions']);
        $ofertas = $this->paginate($query);

        $this->set(compact('ofertas'));
    }

    /**
     * View method
     *
     * @param string|null $id Oferta id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $oferta = $this->Ofertas->get($id, contain: ['Comercials', 'Ubicacions', 'Ofertaspreciosacts', 'Tips']);
        $this->set(compact('oferta'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $oferta = $this->Ofertas->newEmptyEntity();
        if ($this->request->is('post')) {
            $oferta = $this->Ofertas->patchEntity($oferta, $this->request->getData());
            if ($this->Ofertas->save($oferta)) {
                $this->Flash->success(__('The oferta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The oferta could not be saved. Please, try again.'));
        }
        $comercials = $this->Ofertas->Comercials->find('list', limit: 200)->all();
        $ubicacions = $this->Ofertas->Ubicacions->find('list', limit: 200)->all();
        $ofertaspreciosacts = $this->Ofertas->Ofertaspreciosacts->find('list', limit: 200)->all();
        $tips = $this->Ofertas->Tips->find('list', limit: 200)->all();
        $this->set(compact('oferta', 'comercials', 'ubicacions', 'ofertaspreciosacts', 'tips'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Oferta id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $oferta = $this->Ofertas->get($id, contain: ['Ofertaspreciosacts', 'Tips']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $oferta = $this->Ofertas->patchEntity($oferta, $this->request->getData());
            if ($this->Ofertas->save($oferta)) {
                $this->Flash->success(__('The oferta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The oferta could not be saved. Please, try again.'));
        }
        $comercials = $this->Ofertas->Comercials->find('list', limit: 200)->all();
        $ubicacions = $this->Ofertas->Ubicacions->find('list', limit: 200)->all();
        $ofertaspreciosacts = $this->Ofertas->Ofertaspreciosacts->find('list', limit: 200)->all();
        $tips = $this->Ofertas->Tips->find('list', limit: 200)->all();
        $this->set(compact('oferta', 'comercials', 'ubicacions', 'ofertaspreciosacts', 'tips'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Oferta id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $oferta = $this->Ofertas->get($id);
        if ($this->Ofertas->delete($oferta)) {
            $this->Flash->success(__('The oferta has been deleted.'));
        } else {
            $this->Flash->error(__('The oferta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
