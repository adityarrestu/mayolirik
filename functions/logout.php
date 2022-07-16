<?php 
  session_start();
  $_SESSION = [];
  $_SESSION['login'] = false;
  $_SESSION['username'] = '';
  session_unset();
  session_destroy();

  setcookie('id', '', time() - 3600);
  setcookie('key', '', time() - 3600);

  header("Location: ../index.php?p=beranda");
  exit;
?>