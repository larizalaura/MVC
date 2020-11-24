<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Turmas Controller
 *
 * @property \App\Model\Table\TurmasTable $Turmas
 *
 * @method \App\Model\Entity\Turma[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TurmasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $turmas = $this->paginate($this->Turmas);

        $this->set(compact('turmas'));
    }

    /**
     * View method
     *
     * @param string|null $id Turma id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $turma = $this->Turmas->get($id, [
            'contain' => ['Presencas']
        ]);

        $this->set('turma', $turma);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $turma = $this->Turmas->newEntity();
        if ($this->request->is('post')) {
            $turma = $this->Turmas->patchEntity($turma, $this->request->getData());

            if($this->validaTurma($turma)){
                $this->Flash->error(__('Turma já existe, tente novamente!'));
            }else{
                if ($this->Turmas->save($turma)) {
                    $this->Flash->success(__('A turma foi criada.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The turma could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('turma'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Turma id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $turma = $this->Turmas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $turma = $this->Turmas->patchEntity($turma, $this->request->getData());
            if ($this->Turmas->save($turma)) {
                $this->Flash->success(__('The turma has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The turma could not be saved. Please, try again.'));
        }
        $this->set(compact('turma'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Turma id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $turma = $this->Turmas->get($id);
        if ($this->Turmas->delete($turma)) {
            $this->Flash->success(__('The turma has been deleted.'));
        } else {
            $this->Flash->error(__('The turma could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    private function validaTurma($turma)
    {
        $turmas_cadastradas = $this->Turmas->find();
        $flag_turma_existente = false;
        foreach ($turmas_cadastradas as $turmas_cadastrada) {
            if(strcmp($turmas_cadastrada->sub_id_turma,$turma->sub_id_turma)==0){
                if($turmas_cadastrada->semestre == $turma->semestre){
                    if($turmas_cadastrada->ano_atual == $turma->ano_atual){
                        $flag_turma_existente = true;
                    }
                }
            }
        }
        return $flag_turma_existente;
    }
}
