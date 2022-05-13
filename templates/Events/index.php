<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $events
 */
?>

<div class="leaves index content">
    <h1 class="text-center"><?= __('Events') ?></h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $this->Html->link(__('New Event'), ['action' => 'add'], ['class' => 'button float-left']) ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                    <th  scope="col"><?= __('Name') ?></th>
                    <th  scope="col"><?= __('Type') ?></th>
                    <th  scope="col"><?= __('Start date:') ?></th>
                    <th  scope="col"><?= __('End date:') ?></th>
                    <th class="actions"><?= __('Actions')?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($events as $event): ?>
                    <tr scope = "row">
                        <td><?= h($event->name) ?></td>
                        <?php
                        $type = '';
                        if ($event->type == 1){
                            $type='Leave';
                        }elseif ($event->type == 2){
                            $type='Social';
                        }else{
                            $type='Marketing';
                        }?>
                        <td><?= h($type) ?></td>
                        <td><?= h($event->start_date) ?></td>
                        <td><?= h($event->end_date) ?></td>
                        <td class="actions">
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
            <div class="text-center">
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

