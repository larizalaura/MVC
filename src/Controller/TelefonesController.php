<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Telefones Controller
 *
 *
 * @method \App\Model\Entity\Telefone[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TelefonesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $telefones = $this->paginate($this->Telefones);

        $this->set(compact('telefones'));
    }

    /**
     * View method
     *
     * @param string|null $id Telefone id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $telefone = $this->Telefones->get($id, [
            'contain' => []
        ]);

        $this->set('telefone', $telefone);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $telefone = $this->Telefones->newEntity();
        if ($this->request->is('post')) {
            $telefone = $this->Telefones->patchEntity($telefone, $this->request->getData());
            if ($this->Telefones->save($telefone)) {
                $this->Flash->success(__('The telefone has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The telefone could not be saved. Please, try again.'));
        }
        $this->set(compact('telefone'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Telefone id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $telefone = $this->Telefones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $telefone = $this->Telefones->patchEntity($telefone, $this->request->getData());
            if ($this->Telefones->save($telefone)) {
                $this->Flash->success(__('The telefone has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The telefone could not be saved. Please, try again.'));
        }
        $this->set(compact('telefone'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Telefone id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $telefone = $this->Telefones->get($id);
        if ($this->Telefones->delete($telefone)) {
            $this->Flash->success(__('The telefone has been deleted.'));
        } else {
            $this->Flash->error(__('The telefone could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
