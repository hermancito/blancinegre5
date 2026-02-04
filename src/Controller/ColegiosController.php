<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Colegios Controller
 *
 * @property \App\Model\Table\ColegiosTable $Colegios
 */
class ColegiosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Colegios->find()
            ->contain(['Tablaspreciosvbles']);
        $colegios = $this->paginate($query);

        $this->set(compact('colegios'));
    }

    /**
     * View method
     *
     * @param string|null $id Colegio id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $colegio = $this->Colegios->get($id, contain: ['Tablaspreciosvbles', 'Activitats', 'Coordinadors', 'Monitors', 'Notifcolegios', 'Activitatsgrups', 'AlumnosXml', 'Colegiofiles', 'Colegiofilesfamilias', 'Coordinadordiaris', 'Devoluciones', 'Notificacions', 'Personalcontrols', 'Registroaltas', 'Registrobajas', 'Sustitucions', 'Users']);
        $this->set(compact('colegio'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $colegio = $this->Colegios->newEmptyEntity();
        if ($this->request->is('post')) {
            $colegio = $this->Colegios->patchEntity($colegio, $this->request->getData());
            if ($this->Colegios->save($colegio)) {
                $this->Flash->success(__('The colegio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The colegio could not be saved. Please, try again.'));
        }
        $tablaspreciosvbles = $this->Colegios->Tablaspreciosvbles->find('list', limit: 200)->all();
        $activitats = $this->Colegios->Activitats->find('list', limit: 200)->all();
        $coordinadors = $this->Colegios->Coordinadors->find('list', limit: 200)->all();
        $monitors = $this->Colegios->Monitors->find('list', limit: 200)->all();
        $notifcolegios = $this->Colegios->Notifcolegios->find('list', limit: 200)->all();
        $this->set(compact('colegio', 'tablaspreciosvbles', 'activitats', 'coordinadors', 'monitors', 'notifcolegios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Colegio id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $colegio = $this->Colegios->get($id, contain: ['Activitats', 'Coordinadors', 'Monitors', 'Notifcolegios']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $colegio = $this->Colegios->patchEntity($colegio, $this->request->getData());
            if ($this->Colegios->save($colegio)) {
                $this->Flash->success(__('The colegio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The colegio could not be saved. Please, try again.'));
        }
        $tablaspreciosvbles = $this->Colegios->Tablaspreciosvbles->find('list', limit: 200)->all();
        $activitats = $this->Colegios->Activitats->find('list', limit: 200)->all();
        $coordinadors = $this->Colegios->Coordinadors->find('list', limit: 200)->all();
        $monitors = $this->Colegios->Monitors->find('list', limit: 200)->all();
        $notifcolegios = $this->Colegios->Notifcolegios->find('list', limit: 200)->all();
        $this->set(compact('colegio', 'tablaspreciosvbles', 'activitats', 'coordinadors', 'monitors', 'notifcolegios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Colegio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $colegio = $this->Colegios->get($id);
        if ($this->Colegios->delete($colegio)) {
            $this->Flash->success(__('The colegio has been deleted.'));
        } else {
            $this->Flash->error(__('The colegio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
