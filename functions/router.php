<?php 
function route($page) {
  $cek = trim($page);
  if($cek == '') {
    $route = 'public/beranda.php';
  }
  else if($cek == 'beranda') {
    $route = 'public/beranda.php';
  }
  else if($cek == 'lyric') {
    $route = 'public/lyric.php';
  }
  else if($cek == 'about') {
    $route = 'public/about.php';
  }
  else if($cek == 'request') {
    $route = 'public/request.php';
  }
  else if($cek == 'restricted') {
    if($_SESSION['login'] == true) {
      $route = 'private/index.php';
    } else {
      echo '
        <script>
          window.location = "pages/login.php";
        </script>
      ';
    }
  }
  else {
    $route = 'public/beranda.php';
  }

  return $route;
}
?>