<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrainingPlan[]|\Cake\Collection\CollectionInterface $trainingPlan
 */
?>
<div class="trainingPlan index content">
    <?= $this->Html->link(__('New Training Plan'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Training Plan') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('percentage') ?></th>
                    <th><?= $this->Paginator->sort('assign_to') ?></th>
                    <th><?= $this->Paginator->sort('id_task') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($trainingPlan as $trainingPlan): ?>
                <tr>
                    <td><?= $this->Number->format($trainingPlan->id) ?></td>
                    <td><?= h($trainingPlan->title) ?></td>
                    <td><?= $this->Number->format($trainingPlan->percentage) ?></td>
                    <td><?= $this->Number->format($trainingPlan->assign_to) ?></td>
                    <td><?= $this->Number->format($trainingPlan->id_task) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $trainingPlan->id]) ?>
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
