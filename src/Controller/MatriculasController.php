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
            $matricula->aluno_id = $this->request->getData('pesquisar');
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

    public function get_aluno(){
        $alunos = $this->getTableLocator()->get('Alunos');
        $query = $alunos->find();

        if($this->request->getQuery('q')){
            $q = $this->request->getQuery('q');
            $query->where(['Alunos.nome LIKE ' => '%'.$q.'%']);
        }

        $alunos = $this->paginate($query);

        $this->set('alunos', $alunos);
        $this->set('_serialize', ['alunos']);
    }

    public function listar_matriculados(){
        $query = $this->Matriculas->find();

        $query->select(['id' => 'Matriculas.id',
                        'matricula_ativa' => 'Matriculas.matricula_ativa', 
                        'aluno_id' => 'Alunos.id',
                        'nome' => 'Alunos.nome',
                        'sexo' => 'Alunos.sexo',
                        'data_nasc' => 'Alunos.data_nasc',
                        'ano_matricula' => 'Matriculas.data_matricula'
                        ])
              ->innerJoinWith('Alunos');


        $this->set('matriculas', $query);
    }
}
