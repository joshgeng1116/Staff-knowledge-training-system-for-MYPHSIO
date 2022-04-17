<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrainingPlans[]|\Cake\Collection\CollectionInterface $trainingPlans
 * @var \App\Model\Entity\Users[]|\Cake\Collection\CollectionInterface $users
 * @var \App\Model\Entity\TrainingTasks[]|\Cake\Collection\CollectionInterface $trainingtasks
 * @var \App\Model\Entity\Tasks[]|\Cake\Collection\CollectionInterface $tasks
 */
?>
<h1 class="text-center"><?= __('Training Plans') ?></h1>
<div class="fresh-table full-color-azure" style>
    <div class="container">
        <table id="fresh-table" class="bootstrap-table">
            <thead>
                <tr>
                    <th  scope="col"><?= ('ID') ?></th>
                    <th  scope="col"><?= __('Title') ?></th>
                    <th  scope="col"><?= ('Percentage') ?></th>
                    <th  scope="col"><?=('Assign to') ?></th>
                    <th  scope="col"><?= ('Tasks') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($trainingPlans as $trainingPlan): ?>
                  <tr scope="row">
                      <td><?= $this->Number->format($trainingPlan->id) ?></td>
                      <td><?= h($trainingPlan->title) ?></td>
                      <td><?php foreach ($trainingtasks as $trainingtaskss){if($trainingtaskss->training_plan_id == $trainingPlan->id){
                        foreach ($tasks as $taskss){
                          if($taskss->id == $trainingtaskss->task_id){
                          $total_percentage = $taskss->status + $total_percentage;
                          $count = 1+$count;}}}}
                          $trainingPlan->percentage=($total_percentage/$count)*100;
                          echo $this->Number->toPercentage($trainingPlan->percentage)?></td>
                      <td><?php foreach ($users as $userss){if($userss->id == $trainingPlan->assign_to){echo $userss->name;}} ?></td>
                      <td><?php foreach ($trainingtasks as $trainingtaskss){if($trainingtaskss->training_plan_id == $trainingPlan->id){
                                    foreach ($tasks as $taskss){if($taskss->id == $trainingtaskss->task_id){
                                    echo $this->Html->link($taskss->title,['controller'=>'tasks', 'action'=>'edit', $trainingtaskss->task_id]);
                                    }}}} ?></td>
                  </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
        </div>
    </div>
</div>


