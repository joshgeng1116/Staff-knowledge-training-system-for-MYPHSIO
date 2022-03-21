<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Link $link
 * @var \App\Model\Entity\TrainingPlan $trainingplans
 * @var \App\Model\Entity\Task $task
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $link->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $link->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Link'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="link form content">
            <?= $this->Form->create($link) ?>
            <fieldset>
                <legend><?= __('Edit Link') ?></legend>
                <?php
                    echo $this->Form->control('id_training_plan', ['options' => $trainingplans]);
                    echo $this->Form->control('id_task', ['options' => $tasks]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
