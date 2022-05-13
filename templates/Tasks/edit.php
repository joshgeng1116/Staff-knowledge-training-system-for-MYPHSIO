<?php
echo $this->Html->css('info_edit.css');
?>
<div class="row">
    <div class="column-responsive column-100">
        <div class="task edit content">
    <div class="column-responsive column-80">
        <div class="tasks form content">
            <?= $this->Form->create($task) ?>
            <fieldset>
                <h3>    </h3>
                <h1>Edit Task</h1>
                <h3>    </h3>
                <div class="col md-auto">
                    <?php
                    echo $this->Form->control('title', ["required", "class" => "form-control", "label" => "Title"]);
                    ?>
                </div>
                <hr class="sidebar-divider d-none d-md-block">
                <div class="col md-auto">
                     <?php
                    echo $this->Form->control('document_id', ["options"=>$documents,"required", "class" => "form-control", "label" => "Document: "]);
                    ?>
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
                    <a href="<?=$this->Url->build(['action' => 'delete', $task->id])?>" onclick="return confirm('Do you want to delete this task?')" class="form-control button" style="background-color: #4c71de;color: white"><i
                            class="fas fa-edit fa-sm text-white"></i> Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>

