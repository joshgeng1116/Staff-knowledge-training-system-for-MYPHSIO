<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrainingPlan[]|\Cake\Collection\CollectionInterface $trainingPlan
 * @var \App\Model\Entity\Users[]|\Cake\Collection\CollectionInterface $users
 * @var \App\Model\Entity\Link[]|\Cake\Collection\CollectionInterface $links
 * @var \App\Model\Entity\Task[]|\Cake\Collection\CollectionInterface $task
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

<h1 class="text-center"><?= __('Training Plans') ?></h1>
<div class="fresh-table full-color-azure" style>
    <div class="container">
        <table id="fresh-table" class="bootstrap-table">
            <thead>
                <tr>
                    <th  scope="col"><?= ('ID') ?></th>
                    <th  scope="col"><?= __('Title') ?></th>
                    <th  scope="col"><?= ('Percentage') ?></th>
                    <th  scope="col"><?=('Assign to') ?></th>
                    <th  scope="col"><?= ('Tasks') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($trainingPlan as $trainingPlan): ?>
                  <tr scope="row">
                      <td><?= $this->Number->format($trainingPlan->id) ?></td>
                      <td><?= h($trainingPlan->title) ?></td>
                      <td><?= $this->Number->format($trainingPlan->percentage) ?> %</td>
                      <td><?php foreach ($users as $userss){if($userss->id == $trainingPlan->assign_to){echo $userss->name;}} ?> </td>
                      <td><?php foreach ($links as $linkss){if($linkss->id_training_plan == $trainingPlan->id){
                        foreach ($tasks as $taskss){if($taskss->id == $linkss->id_task){
                        echo $this->Html->link($taskss->title,['controller'=>'task', 'action'=>'edit', $linkss->id_task]);
                        }}}} ?></td>
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
        </div>
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


