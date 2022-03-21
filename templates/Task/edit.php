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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $task->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $task->id), 'class' => 'side-nav-item']
            ) ?>
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
                echo $this->Number->toPercentage($task->percentage);
//                echo $this->Form->control('percentage', ['options'=>$to_percentage, "label" => "Task Status: "]);



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
