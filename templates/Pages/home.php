<?php
$this->disableAutoLayout();
?>
<!DOCTYPE html>
<html lang="en">
<link rel="icon" type="image/x-icon" href="assets/myphysio.ico" />
    <head>
        <title>Staff Page</title>
        <link href="css/staffindex.css" rel="stylesheet">
    </head>
<body>
       <div class="banner">
           <div class="navbar">
               <img src="assets/img/logo1.png" calss="logo">
               <ul>
                   <li><a href="#">Home</a></li>
                   <li><a href="#">Something</a></li>
                   <li><a href="#">Something</a></li>
                   <li><a href="#">Something</a></li>
                   <li><a href="users/logout">LOGOUT</a></li>
               </ul>
           </div>
           <div class="content">
               <h1>MY PHYSIO</h1>
               <div>
                <a href="training-plan"><button type="button"><span></span>TRAINING</button></a>
                <a href="category"><button type="button"><span></span>DOCUMENT</button></a>
                <a href="#"><button type="button"><span></span>CALENDAR</button></a>
                <a href="#"><button type="button"><span></span>LEAVE APP</button></a>
               </div>
           </div>
       </div> 
</body>
</html>