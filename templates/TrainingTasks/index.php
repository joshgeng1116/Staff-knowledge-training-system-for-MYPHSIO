<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrainingTask[]|\Cake\Collection\CollectionInterface $trainingTasks
 */
?>
<h1 class="text-center"><?= __('Tasks') ?></h1>
<div class="col-md-12 col-md-offset">
    <div class="fresh-table full-color-azure" style>
        <div class="container">
            <h4 class="text-right">
                <?= $this->Html->link(__('New Task'), ['action' => 'add'], ['class' => 'button float-left']) ?>
            </h4>
    <div class="table-responsive">
        <table class="table table-striped" id="dataTable" width="30%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('training_plan_id') ?></th>
                    <th><?= $this->Paginator->sort('task_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($trainingTasks as $trainingTask): ?>
                <tr>
                    <td><?= $this->Number->format($trainingTask->id) ?></td>
                    <td><?= $trainingTask->has('training_plan') ? $this->Html->link($trainingTask->training_plan->title, ['controller' => 'TrainingPlans', 'action' => 'view', $trainingTask->training_plan->id]) : '' ?></td>
                    <td><?= $trainingTask->has('task') ? $this->Html->link($trainingTask->task->title, ['controller' => 'Tasks', 'action' => 'view', $trainingTask->task->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $trainingTask->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trainingTask->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trainingTask->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trainingTask->id)]) ?>
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
