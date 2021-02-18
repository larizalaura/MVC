<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Responsavelaluno Controller
 *
 *
 * @method \App\Model\Entity\Responsavelaluno[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ResponsavelalunoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $responsavelaluno = $this->paginate($this->Responsavelaluno);

        $this->set(compact('responsavelaluno'));
    }

    /**
     * View method
     *
     * @param string|null $id Responsavelaluno id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $responsavelaluno = $this->Responsavelaluno->get($id, [
            'contain' => []
        ]);

        $this->set('responsavelaluno', $responsavelaluno);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $responsavelaluno = $this->Responsavelaluno->newEntity();
        if ($this->request->is('post')) {
            $responsavelaluno = $this->Responsavelaluno->patchEntity($responsavelaluno, $this->request->getData());
            if ($this->Responsavelaluno->save($responsavelaluno)) {
                $this->Flash->success(__('The responsavelaluno has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The responsavelaluno could not be saved. Please, try again.'));
        }
        $this->set(compact('responsavelaluno'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Responsavelaluno id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $responsavelaluno = $this->Responsavelaluno->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $responsavelaluno = $this->Responsavelaluno->patchEntity($responsavelaluno, $this->request->getData());
            if ($this->Responsavelaluno->save($responsavelaluno)) {
                $this->Flash->success(__('The responsavelaluno has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The responsavelaluno could not be saved. Please, try again.'));
        }
        $this->set(compact('responsavelaluno'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Responsavelaluno id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $responsavelaluno = $this->Responsavelaluno->get($id);
        if ($this->Responsavelaluno->delete($responsavelaluno)) {
            $this->Flash->success(__('The responsavelaluno has been deleted.'));
        } else {
            $this->Flash->error(__('The responsavelaluno could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
