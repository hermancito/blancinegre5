<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Comercials Controller
 *
 * @property \App\Model\Table\ComercialsTable $Comercials
 */
class ComercialsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Comercials->find()
            ->contain(['Agentes', 'Empresas', 'Empresados', 'Empresatres']);
        $comercials = $this->paginate($query);

        $this->set(compact('comercials'));
    }

    /**
     * View method
     *
     * @param string|null $id Comercial id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comercial = $this->Comercials->get($id, contain: ['Agentes', 'Empresas', 'Empresados', 'Empresatres', 'Comercialsarxius', 'Ofertas']);
        $this->set(compact('comercial'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $comercial = $this->Comercials->newEmptyEntity();
        if ($this->request->is('post')) {
            $comercial = $this->Comercials->patchEntity($comercial, $this->request->getData());
            if ($this->Comercials->save($comercial)) {
                $this->Flash->success(__('The comercial has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comercial could not be saved. Please, try again.'));
        }
        $agentes = $this->Comercials->Agentes->find('list', limit: 200)->all();
        $empresas = $this->Comercials->Empresas->find('list', limit: 200)->all();
        $empresados = $this->Comercials->Empresados->find('list', limit: 200)->all();
        $empresatres = $this->Comercials->Empresatres->find('list', limit: 200)->all();
        $this->set(compact('comercial', 'agentes', 'empresas', 'empresados', 'empresatres'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Comercial id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $comercial = $this->Comercials->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comercial = $this->Comercials->patchEntity($comercial, $this->request->getData());
            if ($this->Comercials->save($comercial)) {
                $this->Flash->success(__('The comercial has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comercial could not be saved. Please, try again.'));
        }
        $agentes = $this->Comercials->Agentes->find('list', limit: 200)->all();
        $empresas = $this->Comercials->Empresas->find('list', limit: 200)->all();
        $empresados = $this->Comercials->Empresados->find('list', limit: 200)->all();
        $empresatres = $this->Comercials->Empresatres->find('list', limit: 200)->all();
        $this->set(compact('comercial', 'agentes', 'empresas', 'empresados', 'empresatres'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Comercial id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comercial = $this->Comercials->get($id);
        if ($this->Comercials->delete($comercial)) {
            $this->Flash->success(__('The comercial has been deleted.'));
        } else {
            $this->Flash->error(__('The comercial could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
