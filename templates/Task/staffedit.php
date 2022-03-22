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
            <?= $this->Html->link(__('List Task'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="task form content">
            <?= $this->Form->create($task) ?>
            <fieldset>
                <legend><?= __('Edit Task') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    ?>
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
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
