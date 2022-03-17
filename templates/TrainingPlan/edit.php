<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrainingPlan $trainingPlan
 * @var \App\Model\Entity\Users $users
 * @var \App\Model\Entity\Task $task
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $trainingPlan->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $trainingPlan->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Training Plan'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trainingPlan form content">
            <?= $this->Form->create($trainingPlan) ?>
            <fieldset>
                <legend><?= __('Edit Training Plan') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('description');
                    echo $this->Form->control('percentage');
                    echo $this->Form->control('assign_to', ['options' => $users]);
                    echo $this->Form->control('id_task', ['options' => $tasks], ['multiple' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
