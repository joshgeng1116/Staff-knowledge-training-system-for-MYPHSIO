<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TrainingTasks Controller
 *
 * @property \App\Model\Table\TrainingTasksTable $TrainingTasks
 * @method \App\Model\Entity\TrainingTask[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TrainingTasksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('admin');
        $this->paginate = [
            'contain' => ['TrainingPlans', 'Tasks'],
        ];
        $trainingTasks = $this->paginate($this->TrainingTasks);

        $this->set(compact('trainingTasks'));
    }

    /**
     * View method
     *
     * @param string|null $id Training Task id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('admin');
        $trainingTask = $this->TrainingTasks->get($id, [
            'contain' => ['TrainingPlans', 'Tasks'],
        ]);

        $this->set(compact('trainingTask'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('admin');
        $trainingTask = $this->TrainingTasks->newEmptyEntity();
        if ($this->request->is('post')) {
            $trainingTask = $this->TrainingTasks->patchEntity($trainingTask, $this->request->getData());
            if ($this->TrainingTasks->save($trainingTask)) {
                $this->Flash->success(__('The training task has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The training task could not be saved. Please, try again.'));
        }
        $trainingPlans = $this->TrainingTasks->TrainingPlans->find('list', ['limit' => 200])->all();
        $tasks = $this->TrainingTasks->Tasks->find('list', ['limit' => 200])->all();
        $this->set(compact('trainingTask', 'trainingPlans', 'tasks'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Training Task id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('admin');
        $trainingTask = $this->TrainingTasks->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trainingTask = $this->TrainingTasks->patchEntity($trainingTask, $this->request->getData());
            if ($this->TrainingTasks->save($trainingTask)) {
                $this->Flash->success(__('The training task has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The training task could not be saved. Please, try again.'));
        }
        $trainingPlans = $this->TrainingTasks->TrainingPlans->find('list', ['limit' => 200])->all();
        $tasks = $this->TrainingTasks->Tasks->find('list', ['limit' => 200])->all();
        $this->set(compact('trainingTask', 'trainingPlans', 'tasks'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Training Task id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trainingTask = $this->TrainingTasks->get($id);
        if ($this->TrainingTasks->delete($trainingTask)) {
            $this->Flash->success(__('The training task has been deleted.'));
        } else {
            $this->Flash->error(__('The training task could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
