<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Task $task
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Task'), ['action' => 'edit', $task->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Task'), ['action' => 'delete', $task->id], ['confirm' => __('Are you sure you want to delete # {0}?', $task->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Task'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Task'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="task view content">
            <h3><?= h($task->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($task->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($task->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?php if ($task -> status == 0 && $task -> percentage == 0) :?>
                            Incomplete/Not Attempted
                        <?php elseif ($task -> status == 1 && $task -> percentage != 0) :?>
                            In Progress
                        <?php elseif ($task -> status == 2 && $task -> percentage == 100) :?>
                            Completed
                        <?php endif;?>
                    </td>
                </tr>
                <tr>
                    <th><?= __('Percentage') ?></th>
                    <td><?= $this->Number->toPercentage($task->percentage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Documents') ?></th>
                    <td><?= $this->Number->format($task->documents) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
