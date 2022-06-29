<?php
$this->disableAutoLayout();
?>
<!DOCTYPE html>
<html lang="en">
<link rel="icon" type="image/x-icon" href="assets/icon.jpg" />
    <head>
        <title>Staff Page</title>
        <link href="css/staffindex.css" rel="stylesheet">
    </head>
<body>
       <div class="banner">
           <div class="navbar">
               <img src="assets/img/logo1.png" class="logo">
               <ul>
                   <li><?= $this->Html->link('Home','/')?></li>
                   <li><?= $this->Html->link('Training Plan',['controller'=>'training-plans','action'=>'staffindex'])?></li>
                   <li><?= $this->Html->link('Documents',['controller'=>'categories','action'=>'index'])?></li>
                   <li><?= $this->Html->link('Leave',['controller'=>'leaves','action'=>'index'])?></li>
                   <li><?= $this->Html->link('Calendars',['controller'=>'events','action'=>'home'])?></li>
                   <li><?= $this->Html->link('Logout',['controller'=>'users','action'=>'logout'])?></li>
               </ul>
               <img src="<?= $image?>" width="50px" height="50px">
           </div>
           <div class="content">
               <h1><b>My</b>Physio<a>&reg;</a></h1>
               <div>
                <a href="TrainingPlans/staffindex"><button type="button"><span></span>TRAINING</button></a>
                <a href="Categories"><button type="button"><span></span>DOCUMENTS</button></a>
                <a href="Events/home"><button type="button"><span></span>CALENDARS</button></a>
                <a href="Leaves"><button type="button"><span></span>LEAVE</button></a>

               </div>
           </div>

       </div>
</body>
</html>
