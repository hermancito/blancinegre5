<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AlumnosXml Controller
 *
 * @property \App\Model\Table\AlumnosXmlTable $AlumnosXml
 */
class AlumnosXmlController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->AlumnosXml->find()
            ->contain(['Colegios']);
        $alumnosXml = $this->paginate($query);

        $this->set(compact('alumnosXml'));
    }

    /**
     * View method
     *
     * @param string|null $id Alumnos Xml id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $alumnosXml = $this->AlumnosXml->get($id, contain: ['Colegios']);
        $this->set(compact('alumnosXml'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alumnosXml = $this->AlumnosXml->newEmptyEntity();
        if ($this->request->is('post')) {
            $alumnosXml = $this->AlumnosXml->patchEntity($alumnosXml, $this->request->getData());
            if ($this->AlumnosXml->save($alumnosXml)) {
                $this->Flash->success(__('The alumnos xml has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alumnos xml could not be saved. Please, try again.'));
        }
        $colegios = $this->AlumnosXml->Colegios->find('list', limit: 200)->all();
        $this->set(compact('alumnosXml', 'colegios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Alumnos Xml id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alumnosXml = $this->AlumnosXml->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alumnosXml = $this->AlumnosXml->patchEntity($alumnosXml, $this->request->getData());
            if ($this->AlumnosXml->save($alumnosXml)) {
                $this->Flash->success(__('The alumnos xml has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alumnos xml could not be saved. Please, try again.'));
        }
        $colegios = $this->AlumnosXml->Colegios->find('list', limit: 200)->all();
        $this->set(compact('alumnosXml', 'colegios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Alumnos Xml id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alumnosXml = $this->AlumnosXml->get($id);
        if ($this->AlumnosXml->delete($alumnosXml)) {
            $this->Flash->success(__('The alumnos xml has been deleted.'));
        } else {
            $this->Flash->error(__('The alumnos xml could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
