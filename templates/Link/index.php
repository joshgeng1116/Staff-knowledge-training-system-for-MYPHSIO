<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Link[]|\Cake\Collection\CollectionInterface $link
 * @var \App\Model\Entity\TrainingPlan[]|\Cake\Collection\CollectionInterface $trainingplans
 * @var \App\Model\Entity\Task[]|\Cake\Collection\CollectionInterface $tasks
 */
?>
<div class="link index content">
    <?= $this->Html->link(__('New Link'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Link') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('id_training_plan') ?></th>
                    <th><?= $this->Paginator->sort('id_task') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($link as $link): ?>
                <tr>
                    <td><?= $this->Number->format($link->id) ?></td>
                    <td>
                    <?php foreach ($trainingplans as $trainingplanss){if($trainingplanss->id == $link->id_training_plan){echo $trainingplanss->title;}} ?></td>
                    <td><?php foreach ($tasks as $taskss){if($taskss->id == $link->id_task){echo $tasks->title;}} ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $link->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $link->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $link->id], ['confirm' => __('Are you sure you want to delete # {0}?', $link->id)]) ?>
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
