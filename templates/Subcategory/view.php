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
            <?= $this->Html->link(__('Edit Subcategory'), ['action' => 'edit', $subcategory->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Subcategory'), ['action' => 'delete', $subcategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subcategory->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Subcategory'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Subcategory'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subcategory view content">
            <h3><?= h($subcategory->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($subcategory->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($subcategory->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Cat') ?></th>
                    <td><?= $this->Number->format($subcategory->id_cat) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
