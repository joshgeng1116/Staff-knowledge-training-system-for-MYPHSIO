<?php
$this->disableAutoLayout();
?>
<?php
echo $this -> Html -> css('info_edit.css');
echo $this->Html->css('staffindex.css');
?>


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="assets/icon.jpg" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- own custom CSS -->
    <?php
    echo $this->Html->css('add_home');
    ?>

    <!-- todo favicon not working -->
    <!-- favicon -->
    <?= $this->Html->meta(
        'favicon.ico',
        '/img/favicon.png',
        ['type' => 'icon']
    );?>
</head>
<body>
<div class="content">
    <h2>Choose Calendar Type</h2>
    <div>
        <a href="eventstaff"><button type="button"><span></span>ALL</button></a>
        <a href="social"><button type="button"><span></span>SOCIAL</button></a>
        <a href="leaves"><button type="button"><span></span>LEAVES</button></a>
        <a href="marketing"><button type="button"><span></span>MARKETING</button></a>
        <a href="birthday"><button type="button"><span></span>BIRTHDAY</button></a>
    </div>
</div>
<div class="banner">
    <div class="navbar">
        <?php echo $this->Html->image('logo1.png'); ?>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="TrainingPlans/staffindex">Training Plan</a></li>
            <li><a href="<?php $this->Url->build(['controller'=>'Categories','action'=>'index'])?>">Documents</a></li>
            <li><a href="Leaves">Leave</a></li>
            <li><?= $this->Html->link('Logout',['controller'=>'users','action'=>'logout'])?></li>
        </ul>
<!--        <img src="--><?//= $image?><!--" width="50px" height="50px">-->
    </div>


</div>
</body>
</html>
