<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Link Controller
 *
 * @property \App\Model\Table\LinkTable $Link
 * @method \App\Model\Entity\Link[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LinkController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->loadModel('TrainingPlan');
        $trainingplans = $this->paginate($this->TrainingPlan);
        $this->loadModel('Task');
        $tasks = $this->paginate($this->Task);
        $link = $this->paginate($this->Link);

        $this->set(compact('link', 'trainingplans','tasks'));
    }

    /**
     * View method
     *
     * @param string|null $id Link id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->loadModel('TrainingPlan');
        $trainingplans = $this->paginate($this->TrainingPlan);
        $this->loadModel('Task');
        $tasks = $this->paginate($this->Task);
        $link = $this->Link->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('link','trainingplans','tasks'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $link = $this->Link->newEmptyEntity();
        if ($this->request->is('post')) {
            $link = $this->Link->patchEntity($link, $this->request->getData());
            if ($this->Link->save($link)) {
                $this->Flash->success(__('The link has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The link could not be saved. Please, try again.'));
        }
        $trainingplans = $this->Link-> TrainingPlan -> find('list', ['limit'=> 200]);
        $tasks = $this->Link-> Task -> find('list', ['limit'=> 200]);
        $this->set(compact('link', 'trainingplans','tasks'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Link id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->loadModel('TrainingPlan');
        $trainingplans = $this->TrainingPlan->Find('list', ['limit' => 200]);
        $this->loadModel('Task');
        $tasks = $this->Task->Find('list', ['limit' => 200]);
        $link = $this->Link->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $link = $this->Link->patchEntity($link, $this->request->getData());
            if ($this->Link->save($link)) {
                $this->Flash->success(__('The link has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The link could not be saved. Please, try again.'));
        }
        $this->set(compact('link', 'trainingplans','tasks'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Link id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $link = $this->Link->get($id);
        if ($this->Link->delete($link)) {
            $this->Flash->success(__('The link has been deleted.'));
        } else {
            $this->Flash->error(__('The link could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
