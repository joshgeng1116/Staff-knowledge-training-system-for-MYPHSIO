<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subcategory $subcategory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $subcategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subcategory->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Subcategory'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subcategory form content">
            <?= $this->Form->create($subcategory) ?>
            <fieldset>
                <legend><?= __('Edit Subcategory') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('id_cat');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
