<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom fonts for this template-->
    <?php echo $this->Html->css('all.min.css');?>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <?php echo $this->Html->css('sb-admin-2.min.css');?>
    <?php echo $this->Html->css('datatables.min.css');?>
    <?php echo $this->Html->css('datatables.css');?>
</head>
<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" >

            <div class="sidebar-brand-text mx-3">My Physio Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Divider -->

        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Users
        </div>


        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?=$this->Url->build(['controller'=>'Users','action'=>'index'])?>" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-folder"></i>
                <span>Users</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?=$this->Url->build(['controller'=>'Users','action'=>'index'])?>">View</a>
                </div>
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?=$this->Url->build(['controller'=>'Users','action'=>'add'])?>">Add</a>
                </div>
            </div>
        </li>

        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Knowledage Management
        </div>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?=$this->Url->build(['controller'=>'Categories','action'=>'indexadmin'])?>" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-folder"></i>
                <span>Categories</span>
            </a>

            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?=$this->Url->build(['controller'=>'Categories','action'=>'indexadmin'])?>">View</a>
                </div>
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?=$this->Url->build(['controller'=>'Categories','action'=>'add'])?>">Add</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?=$this->Url->build(['controller'=>'Subcategories','action'=>'index'])?>" data-toggle="collapse" data-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne">
                <i class="fas fa-fw fa-folder"></i>
                <span>Subcategory</span>
            </a>

            <div id="collapseOne" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?=$this->Url->build(['controller'=>'Subcategories','action'=>'index'])?>">View</a>
                </div>
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?=$this->Url->build(['controller'=>'Subcategories','action'=>'add'])?>">Add</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?=$this->Url->build(['controller'=>'Documents','action'=>'index'])?>" data-toggle="collapse" data-target="#collapseThree"
            aria-expanded="true" aria-controls="collapseThree">
                <i class="fas fa-fw fa-folder"></i>
                <span>Documents</span>
            </a>

            <div id="collapseThree" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?=$this->Url->build(['controller'=>'Documents','action'=>'index'])?>">View</a>
                </div>
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?=$this->Url->build(['controller'=>'Documents','action'=>'add'])?>">Add</a>
                </div>
            </div>
        </li>

        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Training Module
        </div>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?=$this->Url->build(['controller'=>'TrainingPlans','action'=>'index'])?>" data-toggle="collapse" data-target="#collapseSix"
            aria-expanded="true" aria-controls="collapseSix">
                <i class="fas fa-fw fa-folder"></i>
                <span>Training Plan</span>
            </a>

            <div id="collapseSix" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?=$this->Url->build(['controller'=>'TrainingPlans','action'=>'index'])?>">View</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?=$this->Url->build(['controller'=>'Tasks','action'=>'index'])?>" data-toggle="collapse" data-target="#collapseFive"
            aria-expanded="true" aria-controls="collapseFive">
                <i class="fas fa-fw fa-folder"></i>
                <span>Training Task</span>
            </a>

            <div id="collapseFive" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?=$this->Url->build(['controller'=>'Tasks','action'=>'index'])?>">View</a>
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Leave Application
        </div>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?=$this->Url->build(['controller'=>'Leaves','action'=>'indexadmin'])?>" data-toggle="collapse" data-target="#collapseSeven"
            aria-expanded="true" aria-controls="collapseSeven">
                <i class="fas fa-fw fa-folder"></i>
                <span>Leaves</span>
            </a>

            <div id="collapseSeven" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?=$this->Url->build(['controller'=>'Leaves','action'=>'indexadmin'])?>">View</a>
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Company Events
        </div>

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?=$this->Url->build(['controller'=>'Events','action'=>'index'])?>" data-toggle="collapse" data-target="#collapseEight"
               aria-expanded="true" aria-controls="collapseEight">
                <i class="fas fa-fw fa-folder"></i>
                <span>Events</span>
            </a>

            <div id="collapseEight" class="collapse" aria-labelledby="headingUtilities"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?=$this->Url->build(['controller'=>'Events','action'=>'index'])?>">View</a>
                </div>
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?=$this->Url->build(['controller'=>'Events','action'=>'add'])?>">Add</a>
                </div>
            </div>
        </li>

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <!-- Here's where I want my views to be displayed -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">
        <div class="col-md-12 col-md-offset">
        <?= $this->fetch('content') ?>
        </div>
    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<?php echo $this->Html->script('jquery.min.js');?>
<?php echo $this->Html->script('bootstrap.bundle.min.js');?>

<!-- Core plugin JavaScript-->
<?php echo $this->Html->script('jquery.easing.min.js');?>

<!-- Custom scripts for all pages-->
<?php echo $this->Html->script('sb-admin-2.min.js');?>

<!-- Page level plugins -->
<?php echo $this->Html->script('Chart.min.js');?>

<!-- table -->
<?php echo $this->Html->script('datatables.min.js');?>
<?php echo $this->Html->script('datatables.js');?>


<!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>

<script type="text/javascript">
    var $table = $('#fresh-table')
    var $alertBtn = $('#alertBtn')

    $(function () {
        $table.bootstrapTable({
            classes: 'table table-hover table-striped',
            toolbar: '.toolbar',

            search: true,
            showRefresh: false,
            showToggle: false,
            showColumns: true,
            pagination: true,
            striped: true,
            sortable: true,
            pageSize: 8,
            pageList: [8, 10, 25, 50, 100],
        })

    })

</script>

