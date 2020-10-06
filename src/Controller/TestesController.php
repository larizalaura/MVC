<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Testes Controller
 *
 * @property \App\Model\Table\TestesTable $Testes
 *
 * @method \App\Model\Entity\Testis[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TestesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $testes = $this->paginate($this->Testes);

        $this->set(compact('testes'));
    }

    /**
     * View method
     *
     * @param string|null $id Testis id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $testis = $this->Testes->get($id, [
            'contain' => []
        ]);

        $this->set('testis', $testis);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $testis = $this->Testes->newEntity();
        if ($this->request->is('post')) {
            $testis = $this->Testes->patchEntity($testis, $this->request->getData());
            if ($this->Testes->save($testis)) {
                $this->Flash->success(__('The testis has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The testis could not be saved. Please, try again.'));
        }
        $this->set(compact('testis'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Testis id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $testis = $this->Testes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $testis = $this->Testes->patchEntity($testis, $this->request->getData());
            if ($this->Testes->save($testis)) {
                $this->Flash->success(__('The testis has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The testis could not be saved. Please, try again.'));
        }
        $this->set(compact('testis'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Testis id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $testis = $this->Testes->get($id);
        if ($this->Testes->delete($testis)) {
            $this->Flash->success(__('The testis has been deleted.'));
        } else {
            $this->Flash->error(__('The testis could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
