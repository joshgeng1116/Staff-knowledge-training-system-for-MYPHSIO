<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document[]|\Cake\Collection\CollectionInterface $documents
 * @var \App\Model\Entity\Document[]|\Cake\Collection\CollectionInterface $categories
 * @var \App\Model\Entity\Document[]|\Cake\Collection\CollectionInterface $subcategories
 */
?>
<div class="leaves index content">
    <h1 class="text-center"><?= __('Documents') ?></h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $this->Html->link(__('New Document'), ['action' => 'add'], ['class' => 'button float-left']) ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
            <div class="text-center">
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
</div>
