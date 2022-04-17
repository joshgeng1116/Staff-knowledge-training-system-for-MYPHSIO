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
        <body class="Task view content">
        <fieldset>
            <h3>    </h3>
            <h1>View Task</h1>
            <h3>    </h3>
                    <div class="col-md-auto">
                        <h4 style="color: gray(5);font-size: 20px" >Title:</h4>
                        <h4 style="color: black;font-size: 20px" ><?= h($task->title) ?></h4>
                    </div>
                    <hr class="sidebar-divider d-none d-md-block">
                    <div class="col-md-auto">
                        <h4 style="color: gray(5);font-size: 20px" >Document:</h4>
                        <h4 style="color: black;font-size: 20px" ><?= h($task->documents) ?></h4>
                    </div>
                    <hr class="sidebar-divider d-none d-md-block">
                    <div class="col-md-auto">
                        <?php if($task->status == 0):?>
                                <h4 style="color: gray(5);font-size: 20px" >Status:</h4>
                                <h4 style="color: black;font-size: 20px" >Open</h4>
                        <?php elseif($task->status == 1):?>
                                <h4 style="color: gray(5);font-size: 20px" >Status:</h4>
                                <h4 style="color: black;font-size: 20px" >Completed</h4>
                        <?php endif;?>
                    </div>
                        <hr class="sidebar-divider d-none d-md-block">
                    <div class="col-md-auto">
                        <?php if($task->percentage == 0):?>
                                <h4 style="color: gray(5);font-size: 20px" >Percentage:</h4>
                                <h4 style="color: black;font-size: 20px" >0%</h4>
                        <?php elseif($task->status == 1):?>
                                <h4 style="color: gray(5);font-size: 20px" >Percentage</h4>
                                <h4 style="color: black;font-size: 20px" >100%</h4>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </fieldset>
            <div class="row mx-auto">
                <h3 class="sidebar-divider d-none d-md-block" style="color: black">Actions :</h3>
                <a href="<?=$this->Url->build(['action' => 'index'])?>" class="form-control button" style="background-color: #4c71de;color: white"><i
                        class="fas fa-backward fa-sm text-white"></i> Back</a>
                <hr class="sidebar-divider d-none d-md-block">
                <a href="<?=$this->Url->build(['action' => 'edit',$task->id])?>" class="form-control button" style="background-color:#4c71de;color: white"><i
                        class="fas fa-edit fa-sm text-white"></i> Edit</a>
            </div>
    </div>
</div>
