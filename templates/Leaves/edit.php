<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Leave $leave
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="column-responsive column-100 center">
    <div class="jobs view content center">
        <?= $this->Form->create($leave) ?>
        <!-- <fieldset> -->
        <div class="row center">
            <form class="needs-validation" novalidate="">
                <div class="col-md-6">
                    <h3 class="mb-3 center" style="color: black">Add Subcategory</h3>

                    <hr class="sidebar-divider d-none d-md-block">

                    <div class="mb-3">
                        <?php
                        echo $this->Form->control('user_id',['class'=>'form-control','options' => $users,"label" => "User: "]);
                        ?>
                    </div>

                    <hr class="sidebar-divider d-none d-md-block">

                    <div class="mb-3">
                        <?php
                        $cata_type= [0=>"Annual Leave", 1=>"Personal/Carer's leave", 2=>"Compassionate Leave", 4=>"Leave without pay", 5=>"Paid Community serviceleave", 3=>"Time in Lieu"];
                        echo $this->Form->control('category',['options'=>$cata_type, "class" => "form-control","label" => "Type of Leave: "]);
                        ?>
                    </div>

                    <hr class="sidebar-divider d-none d-md-block">

                    <div class="mb-3">
                        <?php
                        echo $this->Form->control('date_start',['class'=>'form-control',"label" => "Start Date: "]);
                        ?>
                    </div>

                    <hr class="sidebar-divider d-none d-md-block">

                    <div class="mb-3">
                        <?php
                        echo $this->Form->control('date_end',['class'=>'form-control',"label" => "End Date: "]);
                        ?>
                    </div>

                    <hr class="sidebar-divider d-none d-md-block">

                    <div class="mb-3">
                        <?php
                        echo $this->Form->control('note',['class'=>'form-control',"label" => "Notes: "]);
                        ?>
                    </div>

                    <hr class="sidebar-divider d-none d-md-block">

                    <div class="mb-3">
                        <?php
                        $state_type= [1=>"Submitted", 2=>"Approved", 3=>"Rejected"];
                        echo $this->Form->control('status',['options'=>$state_type, "class" => "form-control","label" => "Status: "]);
                        ?>
                    </div>

                    <hr class="sidebar-divider d-none d-md-block">
                    <div class="center">
                        <?= $this->Form->button(__('Save'), ['class' => 'form-control button', 'style'=>'background:#3CB371;color:white', 'id' => 'submit_btn', 'onclick'=>'Changes have been saved']) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
