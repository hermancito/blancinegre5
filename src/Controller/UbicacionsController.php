<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ubicacions Controller
 *
 * @property \App\Model\Table\UbicacionsTable $Ubicacions
 */
class UbicacionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Ubicacions->find();
        $ubicacions = $this->paginate($query);

        $this->set(compact('ubicacions'));
    }

    /**
     * View method
     *
     * @param string|null $id Ubicacion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ubicacion = $this->Ubicacions->get($id, contain: ['Ofertas']);
        $this->set(compact('ubicacion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ubicacion = $this->Ubicacions->newEmptyEntity();
        if ($this->request->is('post')) {
            $ubicacion = $this->Ubicacions->patchEntity($ubicacion, $this->request->getData());
            if ($this->Ubicacions->save($ubicacion)) {
                $this->Flash->success(__('The ubicacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ubicacion could not be saved. Please, try again.'));
        }
        $this->set(compact('ubicacion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ubicacion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ubicacion = $this->Ubicacions->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ubicacion = $this->Ubicacions->patchEntity($ubicacion, $this->request->getData());
            if ($this->Ubicacions->save($ubicacion)) {
                $this->Flash->success(__('The ubicacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ubicacion could not be saved. Please, try again.'));
        }
        $this->set(compact('ubicacion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ubicacion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ubicacion = $this->Ubicacions->get($id);
        if ($this->Ubicacions->delete($ubicacion)) {
            $this->Flash->success(__('The ubicacion has been deleted.'));
        } else {
            $this->Flash->error(__('The ubicacion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
