<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrainingTask $trainingTask
 * @var string[]|\Cake\Collection\CollectionInterface $trainingPlans
 * @var string[]|\Cake\Collection\CollectionInterface $tasks
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $trainingTask->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $trainingTask->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Training Tasks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trainingTasks form content">
            <?= $this->Form->create($trainingTask) ?>
            <fieldset>
                <legend><?= __('Edit Training Task') ?></legend>
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
