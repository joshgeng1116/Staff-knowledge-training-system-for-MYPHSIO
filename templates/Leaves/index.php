<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Leave[]|\Cake\Collection\CollectionInterface $leaves
 * @var \App\Model\Entity\Users[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="leaves index content">
    <?= $this->Html->link(__('New Leave'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Leaves') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('category') ?></th>
                    <th><?= $this->Paginator->sort('Start Date') ?></th>
                    <th><?= $this->Paginator->sort('End Date') ?></th>
                    <th><?= $this->Paginator->sort('Status') ?></th>
                    <th><?= $this->Paginator->sort('User') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($leaves as $leave): ?>
                <tr>
                    <td><?php
                    if($leave->category == 0){echo "Annual Leave";} 
                    elseif($leave->category == 1){echo "Sick Leave";}
                    elseif($leave->category == 2){echo "Compassionate Leave";}
                    elseif($leave->category == 3){echo "Time in Lieu";}
                    elseif($leave->category == 4){echo "Leave without pay";}
                    elseif($leave->category == 5){echo "Paid Community serviceleave";}
                    elseif($leave->category == 6){echo "Personal/Carer's leave";}?></td>
                    <td><?= h($leave->date_start) ?></td>
                    <td><?= h($leave->date_end) ?></td>
                    <td><?php if($leave->status == 1){echo "Submitted";} 
                    elseif($leave->status == 2){echo "Approved";}
                    elseif($leave->status == 3){echo "Rejected";} ?></td>
                    <td><?php foreach ($users as $userss){if($userss->id == $leave->id_user){echo $userss->name;}} ?></td>
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
