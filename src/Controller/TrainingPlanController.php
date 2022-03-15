<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TrainingPlan Controller
 *
 * @property \App\Model\Table\TrainingPlanTable $TrainingPlan
 * @method \App\Model\Entity\TrainingPlan[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TrainingPlanController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $trainingPlan = $this->paginate($this->TrainingPlan);

        $this->set(compact('trainingPlan'));
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
        $trainingPlan = $this->TrainingPlan->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('trainingPlan'));
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
        $this->loadModel('Task');
        $tasks = $this->Task->Find('list', ['limit' => 200]);
        $trainingPlan = $this->TrainingPlan->newEmptyEntity();
        if ($this->request->is('post')) {
            $trainingPlan = $this->TrainingPlan->patchEntity($trainingPlan, $this->request->getData());
            if ($this->TrainingPlan->save($trainingPlan)) {
                $this->Flash->success(__('The training plan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The training plan could not be saved. Please, try again.'));
        }
        $this->set(compact('trainingPlan', 'users', 'tasks'));
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
        $trainingPlan = $this->TrainingPlan->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trainingPlan = $this->TrainingPlan->patchEntity($trainingPlan, $this->request->getData());
            if ($this->TrainingPlan->save($trainingPlan)) {
                $this->Flash->success(__('The training plan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The training plan could not be saved. Please, try again.'));
        }
        $this->set(compact('trainingPlan'));
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
        $trainingPlan = $this->TrainingPlan->get($id);
        if ($this->TrainingPlan->delete($trainingPlan)) {
            $this->Flash->success(__('The training plan has been deleted.'));
        } else {
            $this->Flash->error(__('The training plan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
