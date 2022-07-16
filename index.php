<?php 
include './functions/router.php';
require_once './components/header.php';
error_reporting(E_ERROR | E_PARSE);
?>

<?php include './components/sidemenu.php'; ?>

<div class="container-fluid vh-100-css">
  <div class="row d-flex" id="main">
    <div class="col-12 col-xl-8">
      <?php
      $route = route($_GET['p']);
      include 'pages/'.$route;
      ?>
    </div>
    <div class="col-12 col-xl-4 border-start pb-3">
      <?php include './components/sidebar.php' ?>
    </div>
  </div>
</div>

<?php
require_once './components/footer.php';
?>