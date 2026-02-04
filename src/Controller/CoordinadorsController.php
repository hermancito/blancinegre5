<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Coordinadors Controller
 *
 * @property \App\Model\Table\CoordinadorsTable $Coordinadors
 */
class CoordinadorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Coordinadors->find();
        $coordinadors = $this->paginate($query);

        $this->set(compact('coordinadors'));
    }

    /**
     * View method
     *
     * @param string|null $id Coordinador id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coordinador = $this->Coordinadors->get($id, contain: ['Alumnos', 'Colegios', 'Monitors', 'Coordinadordiaris', 'Coordinadorsfiles']);
        $this->set(compact('coordinador'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coordinador = $this->Coordinadors->newEmptyEntity();
        if ($this->request->is('post')) {
            $coordinador = $this->Coordinadors->patchEntity($coordinador, $this->request->getData());
            if ($this->Coordinadors->save($coordinador)) {
                $this->Flash->success(__('The coordinador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coordinador could not be saved. Please, try again.'));
        }
        $alumnos = $this->Coordinadors->Alumnos->find('list', limit: 200)->all();
        $colegios = $this->Coordinadors->Colegios->find('list', limit: 200)->all();
        $monitors = $this->Coordinadors->Monitors->find('list', limit: 200)->all();
        $this->set(compact('coordinador', 'alumnos', 'colegios', 'monitors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Coordinador id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coordinador = $this->Coordinadors->get($id, contain: ['Alumnos', 'Colegios', 'Monitors']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coordinador = $this->Coordinadors->patchEntity($coordinador, $this->request->getData());
            if ($this->Coordinadors->save($coordinador)) {
                $this->Flash->success(__('The coordinador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coordinador could not be saved. Please, try again.'));
        }
        $alumnos = $this->Coordinadors->Alumnos->find('list', limit: 200)->all();
        $colegios = $this->Coordinadors->Colegios->find('list', limit: 200)->all();
        $monitors = $this->Coordinadors->Monitors->find('list', limit: 200)->all();
        $this->set(compact('coordinador', 'alumnos', 'colegios', 'monitors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Coordinador id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coordinador = $this->Coordinadors->get($id);
        if ($this->Coordinadors->delete($coordinador)) {
            $this->Flash->success(__('The coordinador has been deleted.'));
        } else {
            $this->Flash->error(__('The coordinador could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
