<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrainingPlan[]|\Cake\Collection\CollectionInterface $trainingPlans
 * @var \App\Model\Entity\Users[]|\Cake\Collection\CollectionInterface $users
 * @var \App\Model\Entity\Tasks[]|\Cake\Collection\CollectionInterface $tasks
 * @var \App\Model\Entity\TrainingTasks[]|\Cake\Collection\CollectionInterface $trainingtasks
 */
?>
                <h1 class="text-center"><?= __('Training Plan') ?></h1>
                <div class="col-md-12 col-md-offset">
                <div class="fresh-table full-color-azure" style>
                    <div class="container">
                    <?= $this->Html->link(__('New Training Plan'), ['action' => 'add'], ['class' => 'button float-right']) ?>
                    <div class="table-responsive">
                        <table class="table table-striped " id="dataTable" width="30%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th><?= $this->Paginator->sort('id') ?></th>
                                    <th><?= $this->Paginator->sort('title') ?></th>
                                    <th><?= $this->Paginator->sort('percentage') ?></th>
                                    <th><?= $this->Paginator->sort('assign_to') ?></th>
                                    <th><?= $this->Paginator->sort('task_id') ?></th>
                                    <th class="actions"><?= __('Actions') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($trainingPlans as $trainingPlan): ?>
                                <tr>
                                    <td><?= $this->Number->format($trainingPlan->id) ?></td>
                                    <td><?= h($trainingPlan->title) ?></td>
                                    <td><?= $this->Number->format($trainingPlan->percentage) ?></td>
                                    <td><?php foreach ($users as $userss){if($userss->id == $trainingPlan->assign_to){echo $userss->name;}} ?></td>
                                    <td><?php foreach ($trainingtasks as $trainingtaskss){if($trainingtaskss->training_plan_id == $trainingPlan->id){
                                    foreach ($tasks as $taskss){if($taskss->id == $trainingtaskss->task_id){
                                    echo $this->Html->link($taskss->title,['controller'=>'tasks', 'action'=>'edit', $trainingtaskss->task_id]);
                                    }}}} ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trainingPlan->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trainingPlan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trainingPlan->id)]) ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="paginator">
                        <ul class="pagination">
                            <?= $this->Paginator->first('<< ' . __('first')) ?>
                            <?= $this->Paginator->prev('< ' . __('previous')) ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next(__('next') . ' >') ?>
                            <?= $this->Paginator->last(__('last') . ' >>') ?>
                        </ul>
                        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
                    </div>
                </div>
                </div>
            </div>
