<?php
if (!isset($_SESSION['username'])) header('./functions/login.php');

include './functions/input-lyric.php';
include './functions/edit-content.php';
include './functions/delete-content.php';
include './functions/translation.php';
include './functions/edit-tl.php';

$languages =  query("SELECT * FROM lang");
$contents = query("SELECT * FROM content");
?>

<head>
  <title>Dashboard</title>
</head>

<div class="my-4 px-2">
  <h2>Dashboard Administrator</h2>

  <!-- Status Notification -->
  <?php if ($status != '') : ?>
    <div class="alert alert-success" role="alert">
      <?= $status; ?>
    </div>
  <?php endif; ?>

  <!-- Error Notification -->
  <?php if ($error != '') : ?>
    <div class="alert alert-danger" role="alert">
      <?= $error; ?>
    </div>
  <?php endif; ?>

  <!-- Tab Button -->
  <div class="nav nav-tabs mt-4" id="nav-tab" role="tablist">
    
    <!-- Lyric Tab Button -->
    <button 
      class="nav-link active" 
      id="new-lyric-tab" 
      data-bs-toggle="tab" 
      data-bs-target="#new-lyric" 
      type="button" 
      role="tab" 
      aria-controls="new-lyric" 
      aria-selected="true"
    >Lyric</button>

    <!-- Content List Tab -->
    <button 
      class="nav-link" 
      id="list-tab" 
      data-bs-toggle="tab" 
      data-bs-target="#list" 
      type="button" 
      role="tab" 
      aria-controls="list" 
      aria-selected="false"
    >Content List</button>

    <!-- Translation List -->
    <button 
      class="nav-link" 
      id="tl-tab" 
      data-bs-toggle="tab" 
      data-bs-target="#tl" 
      type="button" 
      role="tab" 
      aria-controls="tl" 
      aria-selected="false"
    >Translation List</button>

  </div>

  <!-- Tab Panel -->
  <div class="tab-content" id="nav-tabContent">
    <!-- New Lyric -->
    <div class="tab-pane fade show active" id="new-lyric" role="tabpanel" aria-labelledby="new-lyric-tab" tabindex="0">
      <?php include 'new-lyric.php'; ?>
    </div>
    <!-- Content List -->
    <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab" tabindex="0">
      <?php include 'content-list.php' ?>
    </div>
    <!-- Translation List -->
    <div class="tab-pane fade" id="tl" role="tabpanel" aria-labelledby="tl-tab" tabindex="0">
      <?php include 'tl-list.php' ?>
    </div>
  </div>

</div>