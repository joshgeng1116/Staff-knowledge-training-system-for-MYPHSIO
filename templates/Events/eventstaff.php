<?php
/**
 * @var \App\View\AppView $this
 */
$this->disableAutoLayout();
echo $this->Html->css('//cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.css');
echo $this->Html->css('calendar.css');
echo $this->Html->script('//cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.js');
?>

<html lang='en'>
<head>
    <meta charset='utf-8' />
    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                contentHeight:'auto',
                initialView: 'dayGridMonth',
                eventSources: [{url:'<?= $this->Url->build(['controller'=>'Events','action'=>'eventstaff','_ext'=>'json'])?>',textColor:'white'}]
            });
            calendar.render();
        });

    </script>
    <style>
        .fc-toolbar-title{
            color:white;
            font-size: medium;
        }
        .fc-col-header-cell-cushion{
            color: white;
        }
        .fc-daygrid-day-number{
            color:white;
            margin: auto;
        }
    </style>
</head>

<div class="banner">
    <div class="navbar">
        <?php echo $this->Html->image('logo1.png'); ?>
        <ul>
            <li><?= $this->Html->link('Home','/')?></li>
            <li><?= $this->Html->link('Training Plan',['controller'=>'training-plans','action'=>'staffindex'])?></li>
            <li><?= $this->Html->link('Document',['controller'=>'categories','action'=>'index'])?></li>
            <li><?= $this->Html->link('Leave',['controller'=>'leaves','action'=>'index'])?></li>
            <li><?= $this->Html->link('Calendar',['controller'=>'events','action'=>'eventstaff'])?></li>
            <li><?= $this->Html->link('Logout',['controller'=>'users','action'=>'logout'])?></li>
        </ul>
    </div>
    <div class="content">
        <h2>     </h2>
        <h2> All Events</h2>
        <h2>     </h2>
        <div style="width: 60%;margin: auto;">
            <div id="calendar" style="margin: auto;color: black"></div>
        </div>
        <button class="btn" onclick="location.href='<?php echo $this->Url->build(['controller'=>'events','action'=>'home'])?>'">Back</button>
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
