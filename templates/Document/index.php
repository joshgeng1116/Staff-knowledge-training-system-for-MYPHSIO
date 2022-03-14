<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document[]|\Cake\Collection\CollectionInterface $document
 */
?>
<div class="document index content">
    <?= $this->Html->link(__('New Document'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Document') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('user_type') ?></th>
                    <th><?= $this->Paginator->sort('doc_type') ?></th>
                    <th><?= $this->Paginator->sort('id_subcat') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($document as $document): ?>
                <tr>
                    <td><?= $this->Number->format($document->id) ?></td>
                    <td><?= h($document->title) ?></td>
                    <td><?= $this->Number->format($document->user_type) ?></td>
                    <td><?= $this->Number->format($document->doc_type) ?></td>
                    <td><?= $this->Number->format($document->id_subcat) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $document->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $document->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $document->id], ['confirm' => __('Are you sure you want to delete # {0}?', $document->id)]) ?>
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
