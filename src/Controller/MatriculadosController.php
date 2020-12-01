<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Matriculados Controller
 *
 * @property \App\Model\Table\MatriculadosTable $Matriculados
 *
 * @method \App\Model\Entity\Matriculado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MatriculadosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Matriculas', 'Turmas']
        ];
        $matriculados = $this->paginate($this->Matriculados);

        $this->set(compact('matriculados'));
    }

    /**
     * View method
     *
     * @param string|null $id Matriculado id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $matriculado = $this->Matriculados->get($id, [
            'contain' => ['Matriculas', 'Turmas']
        ]);

        $this->set('matriculado', $matriculado);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $matriculado = $this->Matriculados->newEntity();
        if ($this->request->is('post')) {
            $matriculado = $this->Matriculados->patchEntity($matriculado, $this->request->getData());
            if ($this->Matriculados->save($matriculado)) {
                $this->Flash->success(__('The matriculado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The matriculado could not be saved. Please, try again.'));
        }
        $matriculas = $this->Matriculados->Matriculas->find('list', ['limit' => 200]);
        $turmas = $this->Matriculados->Turmas->find('list', ['limit' => 200]);
        $this->set(compact('matriculado', 'matriculas', 'turmas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Matriculado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $matriculado = $this->Matriculados->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $matriculado = $this->Matriculados->patchEntity($matriculado, $this->request->getData());
            if ($this->Matriculados->save($matriculado)) {
                $this->Flash->success(__('The matriculado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The matriculado could not be saved. Please, try again.'));
        }
        $matriculas = $this->Matriculados->Matriculas->find('list', ['limit' => 200]);
        $turmas = $this->Matriculados->Turmas->find('list', ['limit' => 200]);
        $this->set(compact('matriculado', 'matriculas', 'turmas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Matriculado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $matriculado = $this->Matriculados->get($id);
        if ($this->Matriculados->delete($matriculado)) {
            $this->Flash->success(__('The matriculado has been deleted.'));
        } else {
            $this->Flash->error(__('The matriculado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function get_matriculado(){
        
        $query = $this->Matriculados->find();

        // if($this->request->getParam('parametro')){
        //     $dados = $this->request->getData('parametro');

        //     $query->where(['Matriculados.matricula_id'=>$dados]);
        // }

        $dados = $this->request->getParam('parametro');

        $query->where(['Matriculados.matricula_id'=>$dados]);

        $res = $this->paginate($query);

        $this->set('res', $res);
        // $teste = "teste";
        $this->set('_serialize', 'res');

        // $alunos = $this->getTableLocator()->get('Alunos');
        // $query = $alunos->find();

        // if($this->request->getQuery('q')){
        //     $q = $this->request->getQuery('q');
        //     $query->where(['Alunos.nome LIKE ' => '%'.$q.'%']);
        // }

        // $alunos = $this->paginate($query);

        // $this->set('alunos', $alunos);
        // $this->set('_serialize', ['alunos']);
    }
}
