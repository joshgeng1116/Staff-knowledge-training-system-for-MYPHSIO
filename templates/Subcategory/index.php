<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subcategory[]|\Cake\Collection\CollectionInterface $subcategory
 */
?>
<div class="subcategory index content">
    <?= $this->Html->link(__('New Subcategory'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Subcategory') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('id_cat') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($subcategory as $subcategory): ?>
                <tr>
                    <td><?= $this->Number->format($subcategory->id) ?></td>
                    <td><?= h($subcategory->name) ?></td>
                    <td><?= $subcategory->has('category') ? $this->Html->link($subcategory->category->name, ['controller' => 'Category', 'action' => 'view', $subcategory->category->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $subcategory->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subcategory->id]) ?>
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
