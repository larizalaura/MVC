<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\Endereco;

/**
 * Alunos Controller
 *
 * @property \App\Model\Table\AlunosTable $Alunos
 *
 * @method \App\Model\Entity\Aluno[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AlunosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        if($this->request->is('post')){
            $result = $this->request->getData('pesquisar');
            
            $this->redirect(['action' => 'view', $result]);
        }else{
            $alunos = $this->paginate($this->Alunos);

            $this->set(compact('alunos'));          
        }
    }

    /**
     * View method
     *
     * @param string|null $id Aluno id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aluno = $this->Alunos->get($id, [
            'contain' => ['Matriculas']
        ]);

        $this->set('aluno', $aluno);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aluno = $this->Alunos->newEntity();
        // Carregando a entidade de enderecos e criando uma nova instancia
        $this->loadModel('Enderecos');
        $endereco = $this->Enderecos->newEntity();

        if ($this->request->is('post')) {
            // Recebendo os dados por post de cada atributo de endereco
            $endereco->rua = $this->request->getData('rua');
            $endereco->cep = (int) $this->request->getData('cep');
            $endereco->numero = (int) $this->request->getData('numero');
            $endereco->bairro = $this->request->getData('bairro');
            $endereco->cidade = $this->request->getData('cidade');
            $endereco->estado = $this->request->getData('estado');
            //
            $aluno = $this->Alunos->patchEntity($aluno, $this->request->getData());
            
            if ($this->Alunos->save($aluno) && $this->Enderecos->save($endereco)) {
                $this->Flash->success(__('Aluno foi adicionado.'));
                $this->adiciona_novo_endereco_a_novo_aluno();
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aluno could not be saved. Please, try again.'));
        }
        $this->set(compact('aluno'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aluno id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aluno = $this->Alunos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aluno = $this->Alunos->patchEntity($aluno, $this->request->getData());
            if ($this->Alunos->save($aluno)) {
                $this->Flash->success(__('The aluno has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aluno could not be saved. Please, try again.'));
        }
        $this->set(compact('aluno'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aluno id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aluno = $this->Alunos->get($id);
        if ($this->Alunos->delete($aluno)) {
            $this->Flash->success(__('The aluno has been deleted.'));
        } else {
            $this->Flash->error(__('The aluno could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function get_aluno(){
        $query = $this->Alunos->find();

        if($this->request->getQuery('q')){
            $q = $this->request->getQuery('q');
            $query->where(['Alunos.nome LIKE ' => '%'.$q.'%']);
        }

        $alunos = $this->paginate($query);

        $this->set('alunos', $alunos);
        $this->set('_serialize', ['alunos']);
    }

    public function index2()
    {
        $alunos = $this->paginate($this->Alunos);

        $this->set(compact('alunos'));        
    }

    private function adiciona_novo_endereco_a_novo_aluno(){
        // Carrego a entidade de endereços
        $this->loadModel('Enderecos');

        // Crios as querys
        $query_enderecos = $this->Enderecos->find();
        $query_alunos = $this->Alunos->find();

        // Seleciono o último dado inserido
        $query_alunos = $query_alunos->select(['id'])
            ->order(['id'=>'DESC'])
            ->limit(1);
        $query_enderecos = $query_enderecos->select(['id'])
            ->order(['id'=>'DESC'])
            ->limit(1);
        
        // Itero pra pegar apenas o valor desejado
        // Último dado inserido de aluno
        foreach ($query_alunos as $last_row_alunos){
            $id_ultimo_aluno = $last_row_alunos->id;
        };
        // Último dado inserido de endereço
        foreach ($query_enderecos as $last_row_enderecos){
            $id_ultimo_endereco = $last_row_enderecos->id;
        };
        // Insiro no campo estrangeiro de aluno o id do endereço
        $query_alunos->update()
                      ->set(['endereco_id'=>$id_ultimo_endereco])
                      ->where(['id' => $id_ultimo_aluno])
                      ->execute();
    }

}
