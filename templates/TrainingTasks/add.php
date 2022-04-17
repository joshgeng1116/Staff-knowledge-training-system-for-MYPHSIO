<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrainingTask $trainingTask
 * @var \Cake\Collection\CollectionInterface|string[] $trainingPlans
 * @var \Cake\Collection\CollectionInterface|string[] $tasks
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Training Tasks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trainingTasks form content">
            <?= $this->Form->create($trainingTask) ?>
            <fieldset>
                <legend><?= __('Add Training Task') ?></legend>
                <?php
                    echo $this->Form->control('training_plan_id', ['options' => $trainingPlans]);
                    echo $this->Form->control('task_id', ['options' => $tasks]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
