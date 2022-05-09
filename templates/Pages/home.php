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
                   <li><a href="#">Home</a></li>
                   <li><a href="TrainingPlans/staffindex">Training Plan</a></li>
                   <li><a href="<?php $this->Url->build(['controller'=>'Categories','action'=>'index'])?>">Documents</a></li>
                   <li><a href="Leaves">Leave</a></li>
                   <li><a href="Users/logout">Logout</a></li>
               </ul>
               <img src="<?= $image?>" width="50px" height="50px">
           </div>
           <div class="content">
               <h1><b>My</b>Physio<a>&reg;</a></h1>
               <div>
                <a href="TrainingPlans/staffindex"><button type="button"><span></span>TRAINING</button></a>
                <a href="Categories"><button type="button"><span></span>DOCUMENT</button></a>
                <a href="Events/home"><button type="button"><span></span>CALENDAR</button></a>
                <a href="Leaves"><button type="button"><span></span>LEAVE</button></a>
               </div>
           </div>

       </div>
</body>
</html>
