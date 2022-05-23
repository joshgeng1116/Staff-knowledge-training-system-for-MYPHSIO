<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Documents[]|\Cake\Collection\CollectionInterface $documents
 */
$this->disableAutoLayout();
echo $this->Html->css('styles.sidebar.css');
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
    <!-- Page content-->
        <a herf="<?= $document->path?>" target="_blank"></a>
        <body>
        <iframe src="https://review.u21s2102.monash-ie.me/<?= h($document->path)?>" width="100%" height="100%"></iframe>
        </body>
</div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.sidebar.js"></script>
</body>
</html>
