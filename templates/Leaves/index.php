<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Leave[]|\Cake\Collection\CollectionInterface $leaves
 * @var \App\Model\Entity\Users[]|\Cake\Collection\CollectionInterface $users
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
<div class="leaves index content">
    <h2>     </h2>
    <h2>Leave Applications</h2>
    <h2>     </h2>
    <div class="column-responsive column-100">
    <div class="table-responsive">
        <table class="table table-striped table-dark" id="dataTable" width="30%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= h('Category') ?></th>
                    <th><?= h('Start Date') ?></th>
                    <th><?= h('End Date') ?></th>
                    <th><?= h('Status') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($leaves as $leave): ?>
                    <?php if ($userid == $leave->user_id): ?>
                    <tr>
                        <td><?php
                        if($leave->category == 0){echo "Annual Leave";}
                        elseif($leave->category == 1){echo "Personal/Carer's leave";}
                        elseif($leave->category == 2){echo "Compassionate Leave";}
                        elseif($leave->category == 3){echo "Time in Lieu";}
                        elseif($leave->category == 4){echo "Leave without pay";}
                        elseif($leave->category == 5){echo "Paid Community serviceleave";}?></td>
                        <td><?= h($leave->date_start) ?></td>
                        <td><?= h($leave->date_end) ?></td>
                        <td><?php if($leave->status == 1){echo "Submitted";}
                        elseif($leave->status == 2){echo "Approved";}
                        elseif($leave->status == 3){echo "Rejected";} ?></td>
                    </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </div>
    <div class="center">
        <div class="paginator">
        <a href="<?php echo $this->Url->build(['controller'=>'Leaves','action'=>'add'])?>"><button type="button"><span></span>New Leaves</button></a>
            <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
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
            <li><?= $this->Html->link('Document',['controller'=>'categories','action'=>'index'])?></li>
            <li><?= $this->Html->link('Leave',['controller'=>'leaves','action'=>'index'])?></li>
            <li><?= $this->Html->link('Calendar',['controller'=>'events','action'=>'eventstaff'])?></li>
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
