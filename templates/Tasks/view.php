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
            <?= $this->Html->link(__('List Tasks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Task'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tasks view content">
            <h3><?= h($task->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($task->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($task->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($task->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Percentage') ?></th>
                    <td><?= $this->Number->format($task->percentage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Docs') ?></th>
                    <td><?= $this->Number->format($task->docs) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Training Plans') ?></h4>
                <?php if (!empty($task->training_plans)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Percentage') ?></th>
                            <th><?= __('Assign To') ?></th>
                            <th><?= __('Task Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($task->training_plans as $trainingPlans) : ?>
                        <tr>
                            <td><?= h($trainingPlans->id) ?></td>
                            <td><?= h($trainingPlans->title) ?></td>
                            <td><?= h($trainingPlans->description) ?></td>
                            <td><?= h($trainingPlans->percentage) ?></td>
                            <td><?= h($trainingPlans->assign_to) ?></td>
                            <td><?= h($trainingPlans->task_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'TrainingPlans', 'action' => 'view', $trainingPlans->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'TrainingPlans', 'action' => 'edit', $trainingPlans->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'TrainingPlans', 'action' => 'delete', $trainingPlans->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trainingPlans->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Training Tasks') ?></h4>
                <?php if (!empty($task->training_tasks)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Training Plan Id') ?></th>
                            <th><?= __('Task Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($task->training_tasks as $trainingTasks) : ?>
                        <tr>
                            <td><?= h($trainingTasks->id) ?></td>
                            <td><?= h($trainingTasks->training_plan_id) ?></td>
                            <td><?= h($trainingTasks->task_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'TrainingTasks', 'action' => 'view', $trainingTasks->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'TrainingTasks', 'action' => 'edit', $trainingTasks->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'TrainingTasks', 'action' => 'delete', $trainingTasks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trainingTasks->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Documents') ?></h4>
                <?php if (!empty($task->documents)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Author') ?></th>
                            <th><?= __('Year') ?></th>
                            <th><?= __('User Type') ?></th>
                            <th><?= __('Doc Type') ?></th>
                            <th><?= __('Subcat Id') ?></th>
                            <th><?= __('Path') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($task->documents as $documents) : ?>
                        <tr>
                            <td><?= h($documents->id) ?></td>
                            <td><?= h($documents->title) ?></td>
                            <td><?= h($documents->author) ?></td>
                            <td><?= h($documents->year) ?></td>
                            <td><?= h($documents->user_type) ?></td>
                            <td><?= h($documents->doc_type) ?></td>
                            <td><?= h($documents->subcat_id) ?></td>
                            <td><?= h($documents->path) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Documents', 'action' => 'view', $documents->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Documents', 'action' => 'edit', $documents->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Documents', 'action' => 'delete', $documents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $documents->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
