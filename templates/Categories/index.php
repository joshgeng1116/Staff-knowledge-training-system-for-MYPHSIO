<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $categories
 */
$this->disableAutoLayout();
echo $this->Html->css('styles.sidebar.css');
echo $this->Html->css('staffindex.css'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Categories</title>
    <!-- Favicon-->

    <link rel="icon" type="image/x-icon" href="assets/icon.jpg" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.sidebar.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/myphysio.ico" />

</head>
<body>
<div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <div class="border-end bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom bg-light">Categories
        </div>
        <div class="list-group list-group-flush">
            <?php foreach ($categories as $category): ?>
                <a class="list-group-item list-group-item-action list-group-item-light p-3"  href="<?= $this->Url->build(['controller'=>'Subcategories','action'=>'viewByCat',$category->id ])?>"><?= h($category->name) ?></a>
            <?php endforeach; ?>
            </br>
            <a class="border-11" href="<?php echo $this->Url->build('/')?>" >Back To Home</a>
        </div>
    </div>
    <!-- Page content-->
    <div class="container-fluid">
    <div class="banner">
    </div>
    </div>
</div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.sidebar.js"></script>
</body>
</html>
