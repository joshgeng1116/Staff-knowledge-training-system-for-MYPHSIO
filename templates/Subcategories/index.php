<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subcategory[]|\Cake\Collection\CollectionInterface $subcategories
 */
?>
<h1 class="text-center"><?= __('Subcategories') ?></h1>
<div class="col-md-12 col-md-offset">
    <div class="fresh-table full-color-azure" style>
        <div class="container">
            <h4 class="text-right">
                <?= $this->Html->link(__('New Subcategory'), ['action' => 'add'], ['class' => 'button float-right']) ?>
            </h4>

            <table table class="table table-striped " id="dataTable" width="30%" cellspacing="0">
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
