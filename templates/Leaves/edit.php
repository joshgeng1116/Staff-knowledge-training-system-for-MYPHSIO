<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Leave $leave
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $leave->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $leave->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Leaves'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="leaves form content">
            <?= $this->Form->create($leave) ?>
            <fieldset>
                <legend><?= __('Edit Leave') ?></legend>
                <?php
                    echo $this->Form->control('category');
                    echo $this->Form->control('date_start');
                    echo $this->Form->control('date_end');
                    echo $this->Form->control('note');
                    echo $this->Form->control('status');
                    echo $this->Form->control('id_user');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
