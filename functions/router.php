<?php 
function route($page) {
  $cek = trim($page);
  if($cek == '') {
    $route = 'public/beranda.php';
  }
  if($cek == 'beranda') {
    $route = 'public/beranda.php';
  }
  if($cek == 'lyric') {
    $route = 'public/lyric.php';
  }
  if($cek == 'stricted') {
    $route = 'private/index.php';
  }
  if($cek == 'stricted') {
    $route = 'private/index.php';
  }
  if($cek == 'dashboard') {
    $route = 'index.php';
  }

  return $route;
}
?>