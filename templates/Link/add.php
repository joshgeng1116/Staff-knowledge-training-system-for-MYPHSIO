<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Link $link
 * @var \Cake\Collection\CollectionInterface|string[] $trainingplans
 * @var \Cake\Collection\CollectionInterface|string[] $tasks
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Link'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="link form content">
            <?= $this->Form->create($link) ?>
            <fieldset>
                <legend><?= __('Add Link') ?></legend>
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
