<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subcategory[]|\Cake\Collection\CollectionInterface $subcategories
 */
?>
<div class="leaves index content">
    <h1 class="text-center"><?= __('Subcategories') ?></h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $this->Html->link(__('New Subcategory'), ['action' => 'add'], ['class' => 'button float-left']) ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                    <th  scope="col"><?= __('Name') ?></th>
                    <th  scope="col"><?= __('Category') ?></th>
                    <th class="actions"><?= __('Actions')?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($subcategories as $subcategory): ?>
                    <tr scope = "row">
                        <td><?= h($subcategory->name) ?></td>
                        <td><?= h($subcategory->cat_id) ?></td>
                        <td class="actions">
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subcategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subcategory->id)]) ?>
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
