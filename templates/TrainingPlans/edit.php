<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrainingPlan $trainingPlan
 * @var string[]|\Cake\Collection\CollectionInterface $tasks
 */
?>
<?php
echo $this->Html->css('info_edit.css');
?>
<div class="row">
    <div class="column-responsive column-100">
        <div class="training plan edit content">
            <?= $this->Form->create($trainingPlan) ?>
            <fieldset>
                <h3>    </h3>
                <h1>Edit Training Plan</h1>
                <h3>    </h3>
                <div class="col md-auto">
                    <?php
                    echo $this->Form->control('title', ["required", "class" => "form-control", "label" => "Title"]);
                    ?>
                </div>
                <hr class="sidebar-divider d-none d-md-block">
                <div class="col md-auto">
                    <?php
                    echo $this->Form->control('description', ["required", "class" => "form-control", "label" => "Document"]);
                    ?>
                </div>
                <hr class="sidebar-divider d-none d-md-block">
                <div class="col md-auto">
                    <?php
                    echo $this->Form->control('assign_to', ["required", "class" => "form-control", "label" => "Document"]);
                    ?>
                </div>
                <hr class="sidebar-divider d-none d-md-block">
                <div class="col md-auto">
                <a href="<?=$this->Url->build(['controller'=>'TrainingTasks','action' => 'add'])?>" class="form-control button" style="background-color: #4C71DE;color: white"><i
                        class="fas fa-forwards fa-sm text-white"></i> Add Training Task</a>
                </div>
            </fieldset>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="center">
                <?= $this->Form->button(__('Save'), ['class' => 'form-control button', 'style'=>'background:#3CB371;color:white', 'id' => 'submit_btn', 'onclick'=>'Changes have been saved']) ?>
                <?= $this->Form->end() ?>
            </div>
            <div class="row mx-auto">
                <h3 class="mb-3" style="color: #000000">Actions :</h3>
                <hr class="sidebar-divider d-none d-md-block">
                <a href="<?=$this->Url->build(['action' => 'index'])?>" class="form-control button" style="background-color: #4c71de;color: white"><i
                        class="fas fa-backward fa-sm text-white"></i> Back</a>
                <hr class="sidebar-divider d-none d-md-block">
                <a href="<?=$this->Url->build(['action' => 'view', $trainingPlan->id])?>" class="form-control button" style="background-color: #4169E1;color: white"><i
                        class="fas fa-edit fa-sm text-white"></i> View</a>
                <hr class="sidebar-divider d-none d-md-block">
                <a href="<?=$this->Url->build(['action' => 'delete', $trainingPlan->id])?>" onclick="return confirm('Do you want to delete this task?')" class="form-control button" style="background-color: #4c71de;color: white"><i
                        class="fas fa-edit fa-sm text-white"></i> Delete</a>
            </div>
        </div>
        </div>
    </div>
</div>
