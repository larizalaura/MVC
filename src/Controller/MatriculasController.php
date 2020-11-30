<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Matriculas Controller
 *
 * @property \App\Model\Table\MatriculasTable $Matriculas
 *
 * @method \App\Model\Entity\Matricula[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MatriculasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Alunos']
        ];
        $matriculas = $this->paginate($this->Matriculas);

        $this->set(compact('matriculas'));
    }

    /**
     * View method
     *
     * @param string|null $id Matricula id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $matricula = $this->Matriculas->get($id, [
            'contain' => ['Alunos', 'Matriculados', 'Presencas']
        ]);

        $this->set('matricula', $matricula);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $matricula = $this->Matriculas->newEntity();
        if ($this->request->is('post')) {
            $matricula = $this->Matriculas->patchEntity($matricula, $this->request->getData());
            if ($this->Matriculas->save($matricula)) {
                $this->Flash->success(__('The matricula has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The matricula could not be saved. Please, try again.'));
        }
        $alunos = $this->Matriculas->Alunos->find('list', ['limit' => 200]);
        $this->set(compact('matricula', 'alunos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Matricula id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $matricula = $this->Matriculas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $matricula = $this->Matriculas->patchEntity($matricula, $this->request->getData());
            if ($this->Matriculas->save($matricula)) {
                $this->Flash->success(__('The matricula has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The matricula could not be saved. Please, try again.'));
        }
        $alunos = $this->Matriculas->Alunos->find('list', ['limit' => 200]);
        $this->set(compact('matricula', 'alunos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Matricula id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $matricula = $this->Matriculas->get($id);
        if ($this->Matriculas->delete($matricula)) {
            $this->Flash->success(__('The matricula has been deleted.'));
        } else {
            $this->Flash->error(__('The matricula could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
