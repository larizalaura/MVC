<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InformesArquivos Controller
 *
 * @property \App\Model\Table\InformesArquivosTable $InformesArquivos
 *
 * @method \App\Model\Entity\InformesArquivo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InformesArquivosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Informes']
        ];
        $informesArquivos = $this->paginate($this->InformesArquivos);

        $this->set(compact('informesArquivos'));
    }

    /**
     * View method
     *
     * @param string|null $id Informes Arquivo id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $informesArquivo = $this->InformesArquivos->get($id, [
            'contain' => ['Informes']
        ]);

        $this->set('informesArquivo', $informesArquivo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $informesArquivo = $this->InformesArquivos->newEntity();
        if ($this->request->is('post')) {
            $informesArquivo = $this->InformesArquivos->patchEntity($informesArquivo, $this->request->getData());
            if ($this->InformesArquivos->save($informesArquivo)) {
                $this->Flash->success(__('The informes arquivo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The informes arquivo could not be saved. Please, try again.'));
        }
        $informes = $this->InformesArquivos->Informes->find('list', ['limit' => 200]);
        $this->set(compact('informesArquivo', 'informes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Informes Arquivo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $informesArquivo = $this->InformesArquivos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $informesArquivo = $this->InformesArquivos->patchEntity($informesArquivo, $this->request->getData());
            if ($this->InformesArquivos->save($informesArquivo)) {
                $this->Flash->success(__('The informes arquivo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The informes arquivo could not be saved. Please, try again.'));
        }
        $informes = $this->InformesArquivos->Informes->find('list', ['limit' => 200]);
        $this->set(compact('informesArquivo', 'informes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Informes Arquivo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $informesArquivo = $this->InformesArquivos->get($id);
        if ($this->InformesArquivos->delete($informesArquivo)) {
            $this->Flash->success(__('The informes arquivo has been deleted.'));
        } else {
            $this->Flash->error(__('The informes arquivo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
