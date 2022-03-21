<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Link $link
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Link'), ['action' => 'edit', $link->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Link'), ['action' => 'delete', $link->id], ['confirm' => __('Are you sure you want to delete # {0}?', $link->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Link'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Link'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="link view content">
            <h3><?= h($link->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($link->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Training Plan') ?></th>
                    <td><?= $this->Number->format($link->id_training_plan) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Task') ?></th>
                    <td><?= $this->Number->format($link->id_task) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
