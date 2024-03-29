<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $category
 * @var \App\Model\Entity\Subcategory[]|\Cake\Collection\CollectionInterface $subcategories
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
    <title>Simple Sidebar - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
</head>
<body>
<div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <div class="border-end bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom bg-light">Categories
        </div>
        <div class="list-group list-group-flush">
            <?php foreach ($category as $categories): ?>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= $this->Url->build(['controller'=>'Subcategories','action'=>'viewByCat',$categories->id ])?>"><?= h($categories->name) ?></a>
            <?php endforeach; ?>
            </br>
            <a class="border-11" href="<?php echo $this->Url->build('/')?>" >Back To Home</a>
        </div>
    </div>
    <div class="border-end bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom bg-light">Subcategories
        </div>
        <div class="list-group list-group-flush">
            <?php foreach ($subcategories as $subcategory): ?>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= $this->Url->build(['controller'=>'Documents','action'=>'viewBySubcat',$subcategory->id,$subcategory->cat_id])?>"><?= h($subcategory->name) ?></a>
            <?php endforeach; ?>
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
