<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document[]|\Cake\Collection\CollectionInterface $documents
 * @var \App\Model\Entity\Document[]|\Cake\Collection\CollectionInterface $categories
 * @var \App\Model\Entity\Document[]|\Cake\Collection\CollectionInterface $subcategories
 */
?>
<h1 class="text-center"><?= __('Subcategories') ?></h1>
<div class="col-md-12 col-md-offset">
    <div class="fresh-table full-color-azure" style>
        <div class="container">
            <h4 class="text-right">
                <?= $this->Html->link(__('New Category'), ['action' => 'add'], ['class' => 'button float-right']) ?>
            </h4>

            <table table class="table table-striped " id="dataTable" width="30%" cellspacing="0">
                <thead>
                <tr>
                    <th  scope="col"><?= __('Title') ?></th>
                    <th  scope="col"><?= __('Author') ?></th>
                    <th  scope="col"><?= __('Year') ?></th>
                    <th  scope="col"><?= __('User Type') ?></th>
                    <th  scope="col"><?= __('Doc Type') ?></th>
                    <th  scope="col"><?= __('Subcategory') ?></th>
                    <th class="actions"><?= __('Actions')?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($documents as $document): ?>
                    <tr scope = "row">
                        <td><?= h($document->title) ?></td>
                        <td><?= h($document->author) ?></td>
                        <td><?= h($document->year) ?></td>
                        <td><?= h($document->user_type) ?></td>
                        <td><?= h($document->doc_type) ?></td>
                        <?php $sub_name='';
                        foreach ($subcategories as $subcategory){
                            if ($subcategory->id == $document->subcat_id){
                                $sub_name = $subcategory->name;
                            }
                        }?>
                        <td><?= h($sub_name)?></td>
                        <td class="actions">
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $document->id], ['confirm' => __('Are you sure you want to delete # {0}?', $document->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="paginator">
            <ul class="pagination justify-content-center">
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
