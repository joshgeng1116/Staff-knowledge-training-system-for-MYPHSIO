<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Task $task
 */
?>
<?php
echo $this->Html->css('info_edit.css');
?>
<?php
$this->disableAutoLayout();
echo $this->Html->css('validation.css');
?>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="assets/icon.jpg" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- own custom CSS -->
    <?php
    echo $this->Html->css('add_home');
    ?>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- todo favicon not working -->
    <!-- favicon -->
    <?= $this->Html->meta(
        'favicon.ico',
        '/img/favicon.png',
        ['type' => 'icon']
    );?>
</head>
<body>
<div class="row">
    <div class="column-responsive column-80">
        <div class="task form content">
        <legend>
            <tr>
            <td><h2> Task : <?= h($task->title) ?></h2></td>
            </tr>
        </legend>
        <lable>Click on the following button read the document and mark this task as complete</lable>
        </br>
        <button class="btn" onclick="location.href='<?php echo $this->Url->build(['controller'=>'documents','action'=>'taskdoc', $task->document_id])?>'">Document</button>
            <?= $this->Form->create($task) ?>
            <fieldset>
                

                </br>
                <?php
                $status_type= [0=>"Open", 1=>"Complete"];
                echo $this->Form->control('status', ['options'=>$status_type, "required", "class" => "form-control", "label" => "Task Status: "]);
                ?>
                <?php
                echo $this->Form->label('Percentage:  ');
                if ($task -> status == 0)
                    echo $this->Number->toPercentage($task->percentage = 0);
                else if ($task -> status == 1)
                    echo $this->Number->toPercentage($task->percentage = 100);
                ?>
                
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>


<?php echo $this->Html->css('staffindex.css'); ?>
<div class="banner">
        <div class="navbar">
                <?php echo $this->Html->image('logo1.png'); ?>
                <ul>
                    <li><?= $this->Html->link('Home','/')?></li>
                    <li><?= $this->Html->link('Training Plan',['controller'=>'training-plans','action'=>'staffindex'])?></li>
                    <li><?= $this->Html->link('Documents',['controller'=>'categories','action'=>'index'])?></li>
                    <li><?= $this->Html->link('Leave',['controller'=>'leaves','action'=>'index'])?></li>
                    <li><?= $this->Html->link('Calendar',['controller'=>'events','action'=>'home'])?></li>
                    <li><?= $this->Html->link('Logout',['controller'=>'users','action'=>'logout'])?></li>
                </ul>
        </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>