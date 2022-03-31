<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Leave $leave
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="leaves form content">
            <?= $this->Form->create($leave) ?>
            <fieldset>
                <legend><?= __('Add Leave') ?></legend>
                <?php
                    echo $this->Form->control('id_user',['options' => $users,"label" => "User: "]);
                    $cata_type= [0=>"Annual Leave", 1=>"Sick Leave", 2=>"Compassionate Leave", 4=>"Leave without pay", 5=>"Paid Community serviceleave", 6=>"Personal/Carer's leave", 3=>"Time in Lieu"];
                    echo $this->Form->control('category',['options'=>$cata_type, "class" => "form-control","label" => "Type of Leave: "]);
                    echo $this->Form->control('date_start',["label" => "Start Date: "]);
                    echo $this->Form->control('date_end',["label" => "End Date: "]);
                    echo $this->Form->control('note',["label" => "Notes: "]);
                    echo $this->Form->hidden('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
