<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sweets Controller
 *
 * @property \App\Model\Table\SweetsTable $Sweets
 */
class SweetsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $sweets = $this->paginate($this->Sweets);

        $this->set(compact('sweets'));
        $this->set('_serialize', ['sweets']);
    }

    /**
     * View method
     *
     * @param string|null $id Sweet id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sweet = $this->Sweets->get($id, [
            'contain' => []
        ]);

        $this->set('sweet', $sweet);
        $this->set('_serialize', ['sweet']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sweet = $this->Sweets->newEntity();
        if ($this->request->is('post')) {
            $sweet = $this->Sweets->patchEntity($sweet, $this->request->data);
            if ($this->Sweets->save($sweet)) {
                $this->Flash->success(__('The sweet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sweet could not be saved. Please, try again.'));
        }
        $this->set(compact('sweet'));
        $this->set('_serialize', ['sweet']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sweet id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sweet = $this->Sweets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sweet = $this->Sweets->patchEntity($sweet, $this->request->data);
            if ($this->Sweets->save($sweet)) {
                $this->Flash->success(__('The sweet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sweet could not be saved. Please, try again.'));
        }
        $this->set(compact('sweet'));
        $this->set('_serialize', ['sweet']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sweet id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sweet = $this->Sweets->get($id);
        if ($this->Sweets->delete($sweet)) {
            $this->Flash->success(__('The sweet has been deleted.'));
        } else {
            $this->Flash->error(__('The sweet could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
