<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Task[]|\Cake\Collection\CollectionInterface $task
 */
?>
<div class="task index content">
    <?php

    $this->disableAutoLayout();
    echo $this->Html->css('fresh-bootstrap-table.css');
    ?>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">
    <h1 class="text-center"><?= __('Task') ?></h1>
    <div class="fresh-table full-color-azure" style>
        <div class="container">
            <h4 class="text-right">
                <?= $this->Html->link(__('New Task'), ['action' => 'add'], ['class' => 'button float-right']) ?>
            </h4>

            <table id="fresh-table" class="bootstrap-table">
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
                    <td><?= $this->Number->format($task->documents) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $task->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $task->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $task->id], ['confirm' => __('Are you sure you want to delete # {0}?', $task->id)]) ?>
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
    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>

    <script type="text/javascript">
        var $table = $('#fresh-table')
        var $alertBtn = $('#alertBtn')

        $(function () {
            $table.bootstrapTable({
                classes: 'table table-hover table-striped',
                toolbar: '.toolbar',

                search: true,
                showRefresh: false,
                showToggle: true,
                showColumns: false,
                pagination: true,
                striped: true,
                sortable: true,
                pageSize: 8,
                pageList: [8, 10, 25, 50, 100],
            })

        })

    </script>
