<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ColegiosCoordinadors Controller
 *
 * @property \App\Model\Table\ColegiosCoordinadorsTable $ColegiosCoordinadors
 */
class ColegiosCoordinadorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->ColegiosCoordinadors->find()
            ->contain(['Colegios', 'Coordinadors']);
        $colegiosCoordinadors = $this->paginate($query);

        $this->set(compact('colegiosCoordinadors'));
    }

    /**
     * View method
     *
     * @param string|null $id Colegios Coordinador id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $colegiosCoordinador = $this->ColegiosCoordinadors->get($id, contain: ['Colegios', 'Coordinadors']);
        $this->set(compact('colegiosCoordinador'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $colegiosCoordinador = $this->ColegiosCoordinadors->newEmptyEntity();
        if ($this->request->is('post')) {
            $colegiosCoordinador = $this->ColegiosCoordinadors->patchEntity($colegiosCoordinador, $this->request->getData());
            if ($this->ColegiosCoordinadors->save($colegiosCoordinador)) {
                $this->Flash->success(__('The colegios coordinador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The colegios coordinador could not be saved. Please, try again.'));
        }
        $colegios = $this->ColegiosCoordinadors->Colegios->find('list', limit: 200)->all();
        $coordinadors = $this->ColegiosCoordinadors->Coordinadors->find('list', limit: 200)->all();
        $this->set(compact('colegiosCoordinador', 'colegios', 'coordinadors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Colegios Coordinador id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $colegiosCoordinador = $this->ColegiosCoordinadors->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $colegiosCoordinador = $this->ColegiosCoordinadors->patchEntity($colegiosCoordinador, $this->request->getData());
            if ($this->ColegiosCoordinadors->save($colegiosCoordinador)) {
                $this->Flash->success(__('The colegios coordinador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The colegios coordinador could not be saved. Please, try again.'));
        }
        $colegios = $this->ColegiosCoordinadors->Colegios->find('list', limit: 200)->all();
        $coordinadors = $this->ColegiosCoordinadors->Coordinadors->find('list', limit: 200)->all();
        $this->set(compact('colegiosCoordinador', 'colegios', 'coordinadors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Colegios Coordinador id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $colegiosCoordinador = $this->ColegiosCoordinadors->get($id);
        if ($this->ColegiosCoordinadors->delete($colegiosCoordinador)) {
            $this->Flash->success(__('The colegios coordinador has been deleted.'));
        } else {
            $this->Flash->error(__('The colegios coordinador could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
