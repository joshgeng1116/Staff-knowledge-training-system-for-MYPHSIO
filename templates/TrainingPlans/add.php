<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrainingPlan $trainingPlan
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $tasks
 */
?>
<div class="column-responsive column-100 center">
    <div class="jobs view content center">
        <?= $this->Form->create($trainingPlan) ?>
        <!-- <fieldset> -->
        <div class="row center">
            <form class="needs-validation" novalidate="">
                <div class="col-md-6">
                    <h3 class="mb-3 center" style="color: black">Add Training Plan</h3>

                    <hr class="sidebar-divider d-none d-md-block">

                    <div class="mb-3">
                    <?php
                    echo $this->Form->control('title', ["required", "class" => "form-control", "label" => "Title: "]);
                    echo $this->Form->control('description', ["required", "class" => "form-control", "label" => "Description: "]);
                    echo $this->Form->control('assign_to', ['options' => $users]);
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
