<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrainingTask $trainingTask
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Training Task'), ['action' => 'edit', $trainingTask->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Training Task'), ['action' => 'delete', $trainingTask->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trainingTask->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Training Tasks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Training Task'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trainingTasks view content">
            <h3><?= h($trainingTask->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Training Plan') ?></th>
                    <td><?= $trainingTask->has('training_plan') ? $this->Html->link($trainingTask->training_plan->title, ['controller' => 'TrainingPlans', 'action' => 'view', $trainingTask->training_plan->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Task') ?></th>
                    <td><?= $trainingTask->has('task') ? $this->Html->link($trainingTask->task->title, ['controller' => 'Tasks', 'action' => 'view', $trainingTask->task->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($trainingTask->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
