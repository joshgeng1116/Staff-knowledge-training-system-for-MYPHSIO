<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tasks[]|\Cake\Collection\CollectionInterface $tasks
// * @var \App\Model\Entity\Document[]|\Cake\Collection\CollectionInterface $document
 */
?>
        <h1 class="text-center"><?= __('Task') ?></h1>
        <div class="fresh-table full-color-azure" style>
            <div class="container">
                <h4 class="text-right">
                    <?= $this->Html->link(__('New Task'), ['action' => 'add'], ['class' => 'button float-right']) ?>
                </h4>

                <table class="table table-striped" id="dataTable" width="30%" cellspacing="0">
                    <thead>
                    <tr>
                        <th  scope="col"><?= ('ID') ?></th>
                        <th  scope="col"><?= __('Title') ?></th>
                        <th  scope="col"><?= __('Status') ?></th>
                        <th  scope="col"><?= ('Percentage') ?></th>
                        <th  scope="col"><?=('Documents') ?></th>
                        <th class="actions"><?= __('Actions')?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($task as $task): ?>
                        <tr scope = "row">
                            <td><?= $this->Number->format($task->id) ?></td>
                            <td><?= h($task->title) ?></td>
                            <td>
                                <?php if ($task -> status == 0) :?>
                                    Open
                                <?php elseif ($task -> status == 1) :?>
                                    Completed
                                <?php endif;?>
                            </td>
                            <td>
                                <?php
                                if ($task -> status == 0)
                                    echo $this->Number->toPercentage($task->percentage = 0);
                                else if ($task -> status == 1)
                                    echo $this->Number->toPercentage($task->percentage = 100);
                                ?>
                            </td>
                            <td>

                            </td>
                            <td><?= $this->Number->format($task->documents) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $task->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $task->id], ['confirm' => __('Are you sure you want to delete # {0}?', $task->id)]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
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
