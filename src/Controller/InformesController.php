<?php
namespace App\Controller;

use Cake\Collection\Collection;

use App\Controller\AppController;

/**
 * Informes Controller
 *
 * @property \App\Model\Table\InformesTable $Informes
 *
 * @method \App\Model\Entity\Informe[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InformesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['FuncionariosUsuarios', 'ResponsaveisUsuarios']
        ];
        $informes = $this->paginate($this->Informes);

        $this->set(compact('informes'));
    }

    /**
     * View method
     *
     * @param string|null $id Informe id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $informe = $this->Informes->get($id, [
            'contain' => ['FuncionariosUsuarios', 'ResponsaveisUsuarios', 'InformesArquivos']
        ]);

        $this->set('informe', $informe);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $informe = $this->Informes->newEntity();
        
        if ($this->request->is('post')) {
            $informe = $this->Informes->patchEntity($informe, $this->request->getData(), [
                'associated' => [ 'InformesArquivos']
            ]);
            
            // print_r($this->request->data['informes_arquivos']['informes_arquivos']);die();
            if ($this->Informes->save($informe)) {
                    
                $informesArquivos = $this->Informes->InformesArquivos->newEntity();
                $informesArquivos->nome = $this->request->data['informes_arquivos']['informes_arquivos'];
                $this->Informes->InformesArquivos->link($informe, [$informesArquivos]);

                $this->Flash->success(__('The informe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The informe could not be saved. Please, try again.'));
        }

        $responsaveis = $this->obterResponsaveis();

        $funcionarios = $this->obterFuncionarios();

        $this->set(compact('informe', 'responsaveis', 'funcionarios'));
    }

    private function obterResponsaveis()
    {
        $responsaveis = $this->Informes->ResponsaveisUsuarios->find('ownedByResponsaveis', [])->map(function ($value, $key) {
            return [
                'value' => $value->id,
                'text' => $value->nome,
            ];
        });
        return $responsaveis;
    }

    private function obterFuncionarios()
    {
        $funcionarios = $this->Informes->FuncionariosUsuarios->find('ownedByFuncionarios', [])->map(function ($value, $key) {
            return [
                'value' => $value->id,
                'text' => $value->nome,
            ];
        });
        return $funcionarios;
    }

    /**
     * Edit method
     *
     * @param string|null $id Informe id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $informe = $this->Informes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $informe = $this->Informes->patchEntity($informe, $this->request->getData());
            if ($this->Informes->save($informe)) {
                $this->Flash->success(__('The informe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The informe could not be saved. Please, try again.'));
        }
        
        $responsaveis = $this->obterResponsaveis();

        $funcionarios = $this->obterFuncionarios();

        $this->set(compact('informe', 'responsaveis', 'funcionarios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Informe id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $informe = $this->Informes->get($id);
        if ($this->Informes->delete($informe)) {
            $this->Flash->success(__('The informe has been deleted.'));
        } else {
            $this->Flash->error(__('The informe could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
