<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Leave $leave
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $leave->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $leave->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Leaves'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="leaves form content">
            <?= $this->Form->create($leave) ?>
            <fieldset>
                <legend><?= __('Edit Leave') ?></legend>
                <?php
                    echo $this->Form->control('user_id',['options' => $users,"label" => "User: "]);
                    $cata_type= [0=>"Annual Leave", 1=>"Personal/Carer's leave", 2=>"Compassionate Leave", 4=>"Leave without pay", 5=>"Paid Community serviceleave", 3=>"Time in Lieu"];
                    echo $this->Form->control('category',['options'=>$cata_type, "class" => "form-control","label" => "Type of Leave: "]);
                    echo $this->Form->control('date_start',["label" => "Start Date: "]);
                    echo $this->Form->control('date_end',["label" => "End Date: "]);
                    echo $this->Form->control('note',["label" => "Notes: "]);
                    $state_type= [1=>"Submitted", 2=>"Approved", 3=>"Rejected"];
                    echo $this->Form->control('status',['options'=>$state_type, "class" => "form-control","label" => "Status: "]);
                    
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
