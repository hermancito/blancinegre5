<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * OfertasTips Controller
 *
 * @property \App\Model\Table\OfertasTipsTable $OfertasTips
 */
class OfertasTipsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->OfertasTips->find()
            ->contain(['Ofertas', 'Tips']);
        $ofertasTips = $this->paginate($query);

        $this->set(compact('ofertasTips'));
    }

    /**
     * View method
     *
     * @param string|null $id Ofertas Tip id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ofertasTip = $this->OfertasTips->get($id, contain: ['Ofertas', 'Tips']);
        $this->set(compact('ofertasTip'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ofertasTip = $this->OfertasTips->newEmptyEntity();
        if ($this->request->is('post')) {
            $ofertasTip = $this->OfertasTips->patchEntity($ofertasTip, $this->request->getData());
            if ($this->OfertasTips->save($ofertasTip)) {
                $this->Flash->success(__('The ofertas tip has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ofertas tip could not be saved. Please, try again.'));
        }
        $ofertas = $this->OfertasTips->Ofertas->find('list', limit: 200)->all();
        $tips = $this->OfertasTips->Tips->find('list', limit: 200)->all();
        $this->set(compact('ofertasTip', 'ofertas', 'tips'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ofertas Tip id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ofertasTip = $this->OfertasTips->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ofertasTip = $this->OfertasTips->patchEntity($ofertasTip, $this->request->getData());
            if ($this->OfertasTips->save($ofertasTip)) {
                $this->Flash->success(__('The ofertas tip has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ofertas tip could not be saved. Please, try again.'));
        }
        $ofertas = $this->OfertasTips->Ofertas->find('list', limit: 200)->all();
        $tips = $this->OfertasTips->Tips->find('list', limit: 200)->all();
        $this->set(compact('ofertasTip', 'ofertas', 'tips'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ofertas Tip id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ofertasTip = $this->OfertasTips->get($id);
        if ($this->OfertasTips->delete($ofertasTip)) {
            $this->Flash->success(__('The ofertas tip has been deleted.'));
        } else {
            $this->Flash->error(__('The ofertas tip could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
