<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Leave[]|\Cake\Collection\CollectionInterface $leaves
 */
?>
<div class="leaves index content">
    <?= $this->Html->link(__('New Leave'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Leaves') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('category') ?></th>
                    <th><?= $this->Paginator->sort('date_start') ?></th>
                    <th><?= $this->Paginator->sort('date_end') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('id_user') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($leaves as $leave): ?>
                <tr>
                    <td><?= $this->Number->format($leave->id) ?></td>
                    <td><?= h($leave->category) ?></td>
                    <td><?= h($leave->date_start) ?></td>
                    <td><?= h($leave->date_end) ?></td>
                    <td><?= $this->Number->format($leave->status) ?></td>
                    <td><?= $this->Number->format($leave->id_user) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $leave->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $leave->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $leave->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leave->id)]) ?>
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
