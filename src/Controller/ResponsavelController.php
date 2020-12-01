<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Responsavel Controller
 *
 *
 * @method \App\Model\Entity\Responsavel[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ResponsavelController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $responsavel = $this->paginate($this->Responsavel);

        $this->set(compact('responsavel'));
    }

    /**
     * View method
     *
     * @param string|null $id Responsavel id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $responsavel = $this->Responsavel->get($id, [
            'contain' => []
        ]);

        $this->set('responsavel', $responsavel);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $responsavel = $this->Responsavel->newEntity();
        if ($this->request->is('post')) {
            $responsavel = $this->Responsavel->patchEntity($responsavel, $this->request->getData());
            // Recuperar dados endereco
            $this->loadModel('Enderecos');
            $endereco = $this->Enderecos->newEntity();
            $endereco->rua = $this->request->getData('rua');
            $endereco->cep = (int) $this->request->getData('cep');
            $endereco->numero = (int) $this->request->getData('numero');
            $endereco->bairro = $this->request->getData('bairro');
            $endereco->cidade = $this->request->getData('cidade');
            $endereco->estado = $this->request->getData('estado');
            $endereco->tipo = $this->request->getData('tipo');

            // Recuperar dados telefone
            $this->loadModel(('Telefones'));
            $telefone = $this->Telefones->newEntity();
            $telefone->numero = $this->request->getData('numero');
            $telefone->tipo = $this->request->getData('tipo_tel');

            if ($this->Responsavel->save($responsavel) && $this->Enderecos->save($endereco) && $this->Telefones->save($telefone)) {
                $this->adiciona_endereco_no_responsavel();
                $this->adiciona_telefone_no_responsavel();

                $this->Flash->success(__('The responsavel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The responsavel could not be saved. Please, try again.'));
        }
        $this->set(compact('responsavel'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Responsavel id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $responsavel = $this->Responsavel->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $responsavel = $this->Responsavel->patchEntity($responsavel, $this->request->getData());
            if ($this->Responsavel->save($responsavel)) {
                $this->Flash->success(__('The responsavel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The responsavel could not be saved. Please, try again.'));
        }
        $this->set(compact('responsavel'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Responsavel id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $responsavel = $this->Responsavel->get($id);
        if ($this->Responsavel->delete($responsavel)) {
            $this->Flash->success(__('The responsavel has been deleted.'));
        } else {
            $this->Flash->error(__('The responsavel could not be deleted. Please, try again.'));
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

    private function adiciona_endereco_no_responsavel(){
        // Carregando a entidade endereços
        $this->loadModel('Enderecos');
        // Criando query do enderecos
        $query_ultimo_endereco = $this->Enderecos->find();
        // Criando query dos responsaveis
        $query_ultimo_responsavel = $this->Responsavel->find();
        // Select no último dado adicionado
        $query_ultimo_endereco = $query_ultimo_endereco->select(['id'])
            ->order(['id'=>'DESC'])
            ->limit(1);
        $query_ultimo_responsavel = $query_ultimo_responsavel->select(['id'])
            ->order(['id'=>'DESC'])
            ->limit(1);
        // Iterando pra pegar apenas o valor desejado
        // Último dado inserido de aluno
        foreach ($query_ultimo_endereco as $last_row_enderecos){
            $id_ultimo_endereco = $last_row_enderecos->id;
        };
        // Último dado inserido de endereço
        foreach ($query_ultimo_responsavel as $last_row_responsavel){
            $id_ultimo_responsavel = $last_row_responsavel->id;
        };
        // Inserindo o id do endereço no campo da tabela responsável
        $query_ultimo_responsavel->update()
            ->set(['endereco_id'=>$id_ultimo_endereco])
            ->where(['id'=>$id_ultimo_responsavel])
            ->execute();
    }

    private function adiciona_telefone_no_responsavel(){
        // Carregando a entidade telefone
        $this->loadModel('Telefones');
        // Criando a query dos telefones
        $query_ultimo_telefone = $this->Telefones->find();
        // Criando query dos responsaveis
        $query_ultimo_responsavel = $this->Responsavel->find();
        // Select do ultimo dado adcionado
        $query_ultimo_telefone = $query_ultimo_telefone->select(['id'])
            ->order(['id'=>'DESC'])
            ->limit(1);
        $query_ultimo_responsavel = $query_ultimo_responsavel->select(['id'])
            ->order(['id'=>'DESC'])
            ->limit(1);
        // Iterando pra pegar apenas o valor desejado
        // Último dado inserido de telefone
        foreach ($query_ultimo_telefone as $last_row_telefone){
            $id_ultimo_telefone = $last_row_telefone->id;
        }
        // Último dado inserido de responsável
        foreach ($query_ultimo_responsavel as $last_row_responsavel){
            $id_ultimo_responsavel = $last_row_responsavel->id;
        }
        // Inserindo o id do telefone no campo da tabela responsável
        $query_ultimo_responsavel->update()
            ->set(['telefone_id'=>$id_ultimo_telefone])
            ->where(['id'=>$id_ultimo_responsavel])
            ->execute();
    }
}
