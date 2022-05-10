<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TrainingPlans Controller
 *
 * @property \App\Model\Table\TrainingPlansTable $TrainingPlans
 * @method \App\Model\Entity\TrainingPlan[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TrainingPlansController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('admin');
        $this->loadModel('Users');
        $users = $this->paginate($this->Users);
        $this->loadModel('TrainingTasks');
        $trainingtasks = $this->paginate($this->TrainingTasks);
        $this->loadModel('Tasks');
        $tasks = $this->paginate($this->Tasks);
        $this->paginate = [
            'contain' => ['Tasks'],
        ];
        $trainingPlans = $this->paginate($this->TrainingPlans);

        $this->set(compact('trainingPlans', 'users', 'trainingtasks','tasks'));
    }

     /**
     * Staff Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function staffindex()
    {
        $user = $this->request->getAttribute('identity');
        $userid= $user->id;
        $this->loadModel('Users');
        $users = $this->paginate($this->Users);
        $this->loadModel('TrainingTasks');
        $trainingtasks = $this->paginate($this->TrainingTasks);
        $this->loadModel('Tasks');
        $tasks = $this->paginate($this->Tasks);
        $this->paginate = [
            'contain' => [],
        ];
        $trainingPlans = $this->paginate($this->TrainingPlans);
        $this->set(array('count' => 0));
        $this->set(array('total_percentage' => 0));
        $this->set(compact('trainingPlans', 'users', 'trainingtasks','tasks', 'userid'));
        
    }

    /**
     * View method
     *
     * @param string|null $id Training Plan id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('admin');
        $this->loadModel('Users');
        $users = $this->paginate($this->Users);
        $this->loadModel('Tasks');
        $tasks = $this->paginate($this->Tasks);
        $this->loadModel('TrainingTasks');
        $trainingtasks = $this->paginate($this->TrainingTasks);
        $trainingPlan = $this->TrainingPlans->get($id, [
            'contain' => ['Tasks'],
        ]);

        $this->set(compact('trainingPlan', 'tasks', 'users', 'trainingtasks'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('admin');
        $this->loadModel('Users');
        $users = $this->Users->Find('list', ['limit' => 200]);
        $this->loadModel('Tasks');
        $tasks = $this->Tasks->Find('list', ['limit' => 200]);
        $trainingPlan = $this->TrainingPlans->newEmptyEntity();
        if ($this->request->is('post')) {
            $trainingPlan = $this->TrainingPlans->patchEntity($trainingPlan, $this->request->getData());
            if ($this->TrainingPlans->save($trainingPlan)) {
                $this->Flash->success(__('The training plan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The training plan could not be saved. Please, try again.'));
        }
        $tasks = $this->TrainingPlans->Tasks->find('list', ['limit' => 200])->all();
        $users = $this->TrainingPlans->Users->find('list', ['limit'=> 200]);
        $this->set(compact('trainingPlan', 'users','tasks'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Training Plan id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('admin');

        $this->loadModel('Users');
        $users = $this->Users->Find('list', ['limit' => 200]);
        $this->loadModel('Tasks');
        $tasks = $this->Tasks->Find('list', ['limit' => 200]);

        $trainingPlan = $this->TrainingPlans->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trainingPlan = $this->TrainingPlans->patchEntity($trainingPlan, $this->request->getData());
            if ($this->TrainingPlans->save($trainingPlan)) {
                $this->Flash->success(__('The training plan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The training plan could not be saved. Please, try again.'));
        }
        $tasks = $this->TrainingPlans->Tasks->find('list', ['limit' => 200])->all();
        $this->set(compact('trainingPlan', 'users', 'tasks'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Training Plan id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trainingPlan = $this->TrainingPlans->get($id);
        if ($this->TrainingPlans->delete($trainingPlan)) {
            $this->Flash->success(__('The training plan has been deleted.'));
        } else {
            $this->Flash->error(__('The training plan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
