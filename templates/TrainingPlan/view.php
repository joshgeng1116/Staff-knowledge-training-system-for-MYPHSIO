<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrainingPlan $trainingPlan
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Training Plan'), ['action' => 'edit', $trainingPlan->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Training Plan'), ['action' => 'delete', $trainingPlan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trainingPlan->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Training Plan'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Training Plan'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trainingPlan view content">
            <h3><?= h($trainingPlan->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($trainingPlan->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($trainingPlan->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Percentage') ?></th>
                    <td><?= $this->Number->format($trainingPlan->percentage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assign To') ?></th>
                    <td><?= $this->Number->format($trainingPlan->assign_to) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Task') ?></th>
                    <td><?= $this->Number->format($trainingPlan->id_task) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($trainingPlan->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
