<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrainingPlan[]|\Cake\Collection\CollectionInterface $trainingPlan
 * @var \App\Model\Entity\Users[]|\Cake\Collection\CollectionInterface $users
 * @var \App\Model\Entity\Task[]|\Cake\Collection\CollectionInterface $tasks
 */
?>
<div class="trainingPlan index content">
    <?php

    $this->disableAutoLayout();
    echo $this->Html->css('fresh-bootstrap-table.css');
    ?>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">
    <h1 class="text-center"><?= __('Training Plan') ?></h1>
    <div class="fresh-table full-color-azure" style>
        <div class="container">
            <h4  class="text-right"> <?= $this->Html->link(__('New Training Plan'), ['action' => 'add'], ['class' => 'button float-right']) ?>
            </h4>
            <table id="fresh-table" class="bootstrap-table">
            <thead>
                <tr>
                    <th scope="col"><?= ('ID') ?></th>
                    <th scope="col"><?= ('Title') ?></th>
                    <th scope="col"><?= ('Percentage') ?></th>
                    <th scope="col"><?= ('Assign_to') ?></th>
                    <th scope="col"><?= ('Id_task') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($trainingPlan as $trainingPlan): ?>
                <tr>
                    <td><?= $this->Number->format($trainingPlan->id) ?></td>
                    <td><?= h($trainingPlan->title) ?></td>
                    <td><?= $this->Number->toPercentage($trainingPlan->percentage) ?></td>
                    <td><?php foreach ($users as $users){if($users->id == $trainingPlan->assign_to){echo $users->name;}} ?> </td>
                    <td><?php foreach ($tasks as $tasks){if($tasks->id == $trainingPlan->id_task){echo $tasks->title;}} ?> </td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $trainingPlan->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trainingPlan->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trainingPlan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trainingPlan->id)]) ?>
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
