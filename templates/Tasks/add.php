<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Task $task
 */
?>
<?php
echo $this->Html->css('info_edit.css');
?>
<div class="row">
    <div class="column-responsive column-100">
        <body class="jobs view content">
        <hr class="sidebar-divider d-none d-md-block">
        <div class="row">
            <div class="col-md-auto">
                <?= $this->Form->create($task) ?>
                <form>
                    <h3 class="mb-8" style="color: black">Add New Task : </h3>

                    <hr class="sidebar-divider d-none d-md-block">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <?php
                            echo $this->Form->control('Title', ["required", "class" => "form-control", "label" => "Title: "]);
                            ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <?php
                            echo $this->Form->control('Document', ["required", "class" => "form-control", "label" => "Document: "]);
                            ?>
                        </div>
                    </div>

                    <hr class="sidebar-divider d-none d-md-block">

                    <div class="col-md-auto">
                        <?= $this->Form->button(__('Save'), ['class' => 'form-control button', 'style'=>'background:#3CB371;color:white', 'id' => 'submit_btn', 'onclick'=>'Changes have been saved']) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </form>
            </div>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="col-md-auto">
                <h3 class="mb-3" style="color: black">Actions :</h3>
                <hr class="sidebar-divider d-none d-md-block">
                <a href="<?=$this->Url->build(['action' => 'index'])?>" class="form-control button" style="background-color: #4c71de;color: white"><i
                        class="fas fa-backward fa-sm text-white"></i> Back</a>
                <hr class="sidebar-divider d-none d-md-block">
                <a href="<?=$this->Url->build(['action' => 'delete', $task->id])?>" onclick="return confirm('Do you want to delete this task?')" class="form-control button" style="background-color: #4c71de;color: white"><i
                        class="fas fa-edit fa-sm text-white"></i> Delete</a>
            </div>
        </div>
    </div>
