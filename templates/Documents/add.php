<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Documents $document
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Documents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="documents form content">
            <?= $this->Form->create($document) ?>
            <fieldset>
                <legend><?= __('Add Documents') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('user_type');
                    echo $this->Form->control('doc_type');
                    echo $this->Form->control('id_subcat');
                    echo $this->Form->control('path');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>