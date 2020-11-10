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
            'contain' => ['Usuarios']
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
            'contain' => ['Usuarios', 'InformesArquivos']
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
            $informe = $this->Informes->patchEntity($informe, $this->request->getData());
            if ($this->Informes->save($informe)) {
                $this->Flash->success(__('The informe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The informe could not be saved. Please, try again.'));
        }

        $responsaveis= $this->Informes->Usuarios->find('ownedByResponsaveis', [])->map(function ($value, $key) {
            return [
                'value' => $value->id,
                'text' => $value->nome,
            ];
        });

        $funcionarios= $this->Informes->Usuarios->find('ownedByFuncionarios', [])->map(function ($value, $key) {
            return [
                'value' => $value->id,
                'text' => $value->nome,
            ];
        });

        $this->set(compact('informe', 'responsaveis', 'funcionarios'));
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
        $usuarios = $this->Informes->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('informe', 'usuarios'));
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
