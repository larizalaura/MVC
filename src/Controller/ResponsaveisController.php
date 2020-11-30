<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Responsaveis Controller
 *
 * @property \App\Model\Table\ResponsaveisTable $Responsaveis
 *
 * @method \App\Model\Entity\Responsavei[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ResponsaveisController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Enderecos', 'Alunos', 'Telefones']
        ];
        $responsaveis = $this->paginate($this->Responsaveis);

        $this->set(compact('responsaveis'));
    }

    /**
     * View method
     *
     * @param string|null $id Responsavei id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $responsavei = $this->Responsaveis->get($id, [
            'contain' => ['Enderecos', 'Alunos', 'Telefones']
        ]);

        $this->set('responsavei', $responsavei);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $responsavei = $this->Responsaveis->newEntity();
        if ($this->request->is('post')) {
            $responsavei = $this->Responsaveis->patchEntity($responsavei, $this->request->getData());
            if ($this->Responsaveis->save($responsavei)) {
                $this->Flash->success(__('The responsavei has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The responsavei could not be saved. Please, try again.'));
        }
        $enderecos = $this->Responsaveis->Enderecos->find('list', ['limit' => 200]);
        $alunos = $this->Responsaveis->Alunos->find('list', ['limit' => 200]);
        $telefones = $this->Responsaveis->Telefones->find('list', ['limit' => 200]);
        $this->set(compact('responsavei', 'enderecos', 'alunos', 'telefones'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Responsavei id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $responsavei = $this->Responsaveis->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $responsavei = $this->Responsaveis->patchEntity($responsavei, $this->request->getData());
            if ($this->Responsaveis->save($responsavei)) {
                $this->Flash->success(__('The responsavei has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The responsavei could not be saved. Please, try again.'));
        }
        $enderecos = $this->Responsaveis->Enderecos->find('list', ['limit' => 200]);
        $alunos = $this->Responsaveis->Alunos->find('list', ['limit' => 200]);
        $telefones = $this->Responsaveis->Telefones->find('list', ['limit' => 200]);
        $this->set(compact('responsavei', 'enderecos', 'alunos', 'telefones'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Responsavei id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $responsavei = $this->Responsaveis->get($id);
        if ($this->Responsaveis->delete($responsavei)) {
            $this->Flash->success(__('The responsavei has been deleted.'));
        } else {
            $this->Flash->error(__('The responsavei could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
