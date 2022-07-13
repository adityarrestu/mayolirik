<?php 
include './functions/router.php';
require_once './components/header.php';
error_reporting(E_ERROR | E_PARSE);
?>

<?php include './components/sidemenu.php'; ?>

<div class="container-fluid vh-100-css">
  <div class="row d-flex" id="main" style="margin-left: 15rem;">
    <div class="col-8">
      <?php
      $route = route($_GET['p']);
      include 'pages/'.$route;
      ?>
    </div>
    <div class="col-4 border-start">
      <?php include './components/sidebar.php' ?>
    </div>
  </div>
</div>

<?php
require_once './components/footer.php';
?>