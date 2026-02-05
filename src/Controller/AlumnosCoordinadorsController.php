<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AlumnosCoordinadors Controller
 *
 * @property \App\Model\Table\AlumnosCoordinadorsTable $AlumnosCoordinadors
 */
class AlumnosCoordinadorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->AlumnosCoordinadors->find()
            ->contain(['Alumnos', 'Coordinadors']);
        $alumnosCoordinadors = $this->paginate($query);

        $this->set(compact('alumnosCoordinadors'));
    }

    /**
     * View method
     *
     * @param string|null $id Alumnos Coordinador id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $alumnosCoordinador = $this->AlumnosCoordinadors->get($id, contain: ['Alumnos', 'Coordinadors']);
        $this->set(compact('alumnosCoordinador'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alumnosCoordinador = $this->AlumnosCoordinadors->newEmptyEntity();
        if ($this->request->is('post')) {
            $alumnosCoordinador = $this->AlumnosCoordinadors->patchEntity($alumnosCoordinador, $this->request->getData());
            if ($this->AlumnosCoordinadors->save($alumnosCoordinador)) {
                $this->Flash->success(__('The alumnos coordinador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alumnos coordinador could not be saved. Please, try again.'));
        }
        $alumnos = $this->AlumnosCoordinadors->Alumnos->find('list', limit: 200)->all();
        $coordinadors = $this->AlumnosCoordinadors->Coordinadors->find('list', limit: 200)->all();
        $this->set(compact('alumnosCoordinador', 'alumnos', 'coordinadors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Alumnos Coordinador id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alumnosCoordinador = $this->AlumnosCoordinadors->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alumnosCoordinador = $this->AlumnosCoordinadors->patchEntity($alumnosCoordinador, $this->request->getData());
            if ($this->AlumnosCoordinadors->save($alumnosCoordinador)) {
                $this->Flash->success(__('The alumnos coordinador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alumnos coordinador could not be saved. Please, try again.'));
        }
        $alumnos = $this->AlumnosCoordinadors->Alumnos->find('list', limit: 200)->all();
        $coordinadors = $this->AlumnosCoordinadors->Coordinadors->find('list', limit: 200)->all();
        $this->set(compact('alumnosCoordinador', 'alumnos', 'coordinadors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Alumnos Coordinador id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alumnosCoordinador = $this->AlumnosCoordinadors->get($id);
        if ($this->AlumnosCoordinadors->delete($alumnosCoordinador)) {
            $this->Flash->success(__('The alumnos coordinador has been deleted.'));
        } else {
            $this->Flash->error(__('The alumnos coordinador could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
