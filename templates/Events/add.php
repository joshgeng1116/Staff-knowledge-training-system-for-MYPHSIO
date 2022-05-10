<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<div class="column-responsive column-100 center">
    <div class="jobs view content center">
        <?= $this->Form->create($event) ?>
        <!-- <fieldset> -->
        <div class="row center">
            <form class="needs-validation" novalidate="">
                <div class="col-md-6">
                    <h3 class="mb-3 center" style="color: black">Add Event</h3>

                    <hr class="sidebar-divider d-none d-md-block">

                    <div class="mb-3">
                        <?php
                        echo $this->Form->control('name', ["required", "class" => "form-control", "label" => "Name: "]);
                        ?>
                    </div>

                    <hr class="sidebar-divider d-none d-md-block">

                    <div class="mb-3">
                        <?php
                        echo $this->Form->control('birthday', ["required", "class" => "form-control", "label" => "Birthday: "]);
                        ?>
                    </div>

                    <hr class="sidebar-divider d-none d-md-block">

                    <div class="mb-3">
                        <?php
                        $event_type = [1=>'Leave',2=>'Social',3=>'Marketing'];
                        echo $this->Form->control('type', ["options"=>$event_type,"required", "class" => "form-control", "label" => "Type: "]);
                        ?>
                    </div>

                    <hr class="sidebar-divider d-none d-md-block">

                    <div class="mb-3">
                        <?php
                        echo $this->Form->control('start_date', ["required", "class" => "form-control", "label" => "Start date: "]);
                        ?>
                    </div>

                    <hr class="sidebar-divider d-none d-md-block">

                    <div class="mb-3">
                        <?php
                        echo $this->Form->control('end_date', ["required", "class" => "form-control", "label" => "End date: "]);
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
