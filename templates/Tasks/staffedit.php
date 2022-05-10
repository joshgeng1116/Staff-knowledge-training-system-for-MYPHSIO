<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Task $task
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="task form content">
            <?= $this->Form->create($task) ?>
            <fieldset>
                <legend>
                    <tr>
                        <td><?= h($task->title) ?></td>
                    </tr>
                </legend>
                <?php
                $status_type= [0=>"Open", 1=>"Complete"];
                echo $this->Form->control('status', ['options'=>$status_type, "required", "class" => "form-control", "label" => "Task Status: "]);
                ?>
                <?php
                echo $this->Form->label('Percentage');
                if ($task -> status == 0)
                    echo $this->Number->toPercentage($task->percentage = 0);
                else if ($task -> status == 1)
                    echo $this->Number->toPercentage($task->percentage = 100);
                ?>
                <?php
                echo $this->Form->control('documents');
                echo $this->Form->button('documents')
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
