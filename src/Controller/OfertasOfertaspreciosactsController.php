<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * OfertasOfertaspreciosacts Controller
 *
 * @property \App\Model\Table\OfertasOfertaspreciosactsTable $OfertasOfertaspreciosacts
 */
class OfertasOfertaspreciosactsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->OfertasOfertaspreciosacts->find()
            ->contain(['Ofertaspreciosacts', 'Ofertas', 'Ofertashorarios']);
        $ofertasOfertaspreciosacts = $this->paginate($query);

        $this->set(compact('ofertasOfertaspreciosacts'));
    }

    /**
     * View method
     *
     * @param string|null $id Ofertas Ofertaspreciosact id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ofertasOfertaspreciosact = $this->OfertasOfertaspreciosacts->get($id, contain: ['Ofertaspreciosacts', 'Ofertas', 'Ofertashorarios']);
        $this->set(compact('ofertasOfertaspreciosact'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ofertasOfertaspreciosact = $this->OfertasOfertaspreciosacts->newEmptyEntity();
        if ($this->request->is('post')) {
            $ofertasOfertaspreciosact = $this->OfertasOfertaspreciosacts->patchEntity($ofertasOfertaspreciosact, $this->request->getData());
            if ($this->OfertasOfertaspreciosacts->save($ofertasOfertaspreciosact)) {
                $this->Flash->success(__('The ofertas ofertaspreciosact has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ofertas ofertaspreciosact could not be saved. Please, try again.'));
        }
        $ofertaspreciosacts = $this->OfertasOfertaspreciosacts->Ofertaspreciosacts->find('list', limit: 200)->all();
        $ofertas = $this->OfertasOfertaspreciosacts->Ofertas->find('list', limit: 200)->all();
        $ofertashorarios = $this->OfertasOfertaspreciosacts->Ofertashorarios->find('list', limit: 200)->all();
        $this->set(compact('ofertasOfertaspreciosact', 'ofertaspreciosacts', 'ofertas', 'ofertashorarios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ofertas Ofertaspreciosact id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ofertasOfertaspreciosact = $this->OfertasOfertaspreciosacts->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ofertasOfertaspreciosact = $this->OfertasOfertaspreciosacts->patchEntity($ofertasOfertaspreciosact, $this->request->getData());
            if ($this->OfertasOfertaspreciosacts->save($ofertasOfertaspreciosact)) {
                $this->Flash->success(__('The ofertas ofertaspreciosact has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ofertas ofertaspreciosact could not be saved. Please, try again.'));
        }
        $ofertaspreciosacts = $this->OfertasOfertaspreciosacts->Ofertaspreciosacts->find('list', limit: 200)->all();
        $ofertas = $this->OfertasOfertaspreciosacts->Ofertas->find('list', limit: 200)->all();
        $ofertashorarios = $this->OfertasOfertaspreciosacts->Ofertashorarios->find('list', limit: 200)->all();
        $this->set(compact('ofertasOfertaspreciosact', 'ofertaspreciosacts', 'ofertas', 'ofertashorarios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ofertas Ofertaspreciosact id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ofertasOfertaspreciosact = $this->OfertasOfertaspreciosacts->get($id);
        if ($this->OfertasOfertaspreciosacts->delete($ofertasOfertaspreciosact)) {
            $this->Flash->success(__('The ofertas ofertaspreciosact has been deleted.'));
        } else {
            $this->Flash->error(__('The ofertas ofertaspreciosact could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
