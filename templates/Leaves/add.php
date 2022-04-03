<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Leave $leave
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>

<?php
echo $this->Html->css('info_edit.css');
?>
<?php
$this->disableAutoLayout();
echo $this->Html->css('validation.css');
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- own custom CSS -->
    <?php
    echo $this->Html->css('add_home');
    ?>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- favicon -->
    <?= $this->Html->meta(
        'favicon.ico',
        '/img/favicon.png',
        ['type' => 'icon']
    );
?>


    <title>Easy Peasy Removalists</title>
</head>

<body>

<!-- form content -->
<div class="container w-75">
    <div class="column-responsive column-80">
        <div class="leaves form content">
            <?= $this->Form->create($leave) ?>
            <fieldset>
                <h2>     </h2>
                <h1>Leave Application</h1>
                <h2>     </h2>
                <div class="section_YOU">

                    <div class="row mx-auto">
                        <?php

                        echo $this->Form->control('id_user', ['options' => $users,"required", "class" => "form-control", "label" => "Name"]);
                        $cata_type= [0=>"Annual Leave", 1=>"Sick Leave", 2=>"Compassionate Leave", 4=>"Leave without pay", 5=>"Paid Community serviceleave", 6=>"Personal/Carer's leave", 3=>"Time in Lieu"];
                        echo $this->Form->control('category', ['options'=>$cata_type,"class" => "form-control", "label" => "Type of Leave", "placeholder" => "Doe"]);
                        ?>
                    </div>
                    <div class="row mx-auto">
                        <?php
                        echo $this->Form->control('date_start', ["required", "class" => "form-control", "label" => "Start Date"]);
                        echo $this->Form->control('date_end', ["required", "class" => "form-control", "label" => "End Date"]);

                        ?>
                    </div>
                    <div class="row mx-auto">
                        <?php
                        echo $this->Form->control('note', ["required", "class" => "form-control", "label" => "Notes"]);
                        echo $this->Form->hidden('status');
                        ?>
                    </div>
                </div>
                <div class="center">
                    <?= $this->Form->button(__('Submit Leave'), ['class' => 'btn btn-success', 'id' => 'submit_btn']) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

<!-- API Js -->
<?php
echo $this->Html->script('API/addressFinder');
?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<!-- custom form validation front-end JS script by Darren -->
<?php
echo $this->Html->script('form_validation');
?>

</body>

</html>

