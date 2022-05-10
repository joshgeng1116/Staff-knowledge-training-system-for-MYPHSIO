<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Leaves Controller
 *
 * @property \App\Model\Table\LeavesTable $Leaves
 * @method \App\Model\Entity\Leave[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LeavesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $user = $this->request->getAttribute('identity');
        $userid= $user->id;
        $this->loadModel('Users');
        $users = $this->paginate($this->Users);
        $leaves = $this->paginate($this->Leaves);
        $this->set(compact('leaves', 'users', 'userid'));
    }

    /**
     * Index adminmethod
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function indexadmin()
    {
        $this->viewBuilder()->setLayout('admin');
        $this->loadModel('Users');
        $users = $this->paginate($this->Users);
        $leaves = $this->paginate($this->Leaves);
        $this->set(compact('leaves', 'users'));
    }

    /**
     * View method
     *
     * @param string|null $id Leave id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->loadModel('Users');
        $users = $this->paginate($this->Users);
        $leave = $this->Leaves->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('leave', 'users'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('Users');
        $users = $this->Users->Find('list', ['limit' => 200]);
        $leave = $this->Leaves->newEmptyEntity();
        if ($this->request->is('post')) {
            $leave = $this->Leaves->patchEntity($leave, $this->request->getData());
            $post_file = $this->request->getData('post_file');
            $name = $post_file['name'];
            $leave->attachments = "webroot/leave_docs/".$name;
            $path = WWW_ROOT."leave_docs/".$name;
            move_uploaded_file($post_file['tmp_name'],$path);
            if ($this->Leaves->save($leave)) {
                $this->Flash->success(__('The leave has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The leave could not be saved. Please, try again.'));
        }
        $users = $this->Leaves -> Users -> find('list', ['limit'=> 200]);
        $this->set(compact('leave', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Leave id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('admin');
        $this->loadModel('Users');
        $users = $this->Users->Find('list', ['limit' => 200]);
        $leave = $this->Leaves->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $leave = $this->Leaves->patchEntity($leave, $this->request->getData());
            if ($this->Leaves->save($leave)) {
                $this->Flash->success(__('The leave has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The leave could not be saved. Please, try again.'));
        }
        $this->set(compact('leave', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Leave id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $leave = $this->Leaves->get($id);
        if ($this->Leaves->delete($leave)) {
            $this->Flash->success(__('The leave has been deleted.'));
        } else {
            $this->Flash->error(__('The leave could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
