<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Bootstrap -->
  <link rel="stylesheet" href="./src/css/bootstrap.css">
  <link rel="stylesheet" href="./src/css/style.css">
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
</head>

<?php
// inisialisasi session
session_start();

require './functions/query.php';
require './functions/connection.php';

if (isset($_SESSION['login'])) {
  if($_SESSION['username'] != '') {
    $username = $_SESSION['username'];
  
    $query = query("SELECT * FROM users WHERE username = '$username'");
  }
}
?>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
    <div class="container-fluid">
      <!-- Toggler Button -->
      <div class="mx-2 d-block" id="btn-wrap" type="button" onclick="toggleWrap()">
        <span class="navbar-toggler-icon"></span>
      </div>
      <a class="navbar-brand" href="?p=beranda">MAYOLIRIK
        <img src="" style="max-height: 2.8rem" alt="" />
      </a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Search Box -->
      <div class="collapse navbar-collapse ms-5 ps-5" id="collapsibleNavId">
        <form class="d-flex my-2 my-lg-0">
          <input class="form-control me-sm-2" type="text" placeholder="Search" />
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
            Search
          </button>
        </form>
      </div>
    </div>

    <!-- Logout Button -->
    <?php if (isset($_SESSION['username'])) : ?>
      <div class="dropdown">
        <a href="" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="./src/img/pf-moona.jpg" class="rounded-circle mx-3" style="max-height: 2.5rem;" alt="">
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
          <li>
            <a class="dropdown-item" href="?p=request-list">Request List</a>
          </li>
          <li>
            <a class="dropdown-item" href="./functions/logout.php">Logout</a>
          </li>
        </ul>
      </div>
    <?php endif; ?>
  </nav>

  <script>

    function toggleWrap() {
      let btnWrap = document.querySelector("#btn-wrap");
      let sideMenu = document.querySelector("#sidemenu");
      let main = document.querySelector("#main");
      let sosmed = document.querySelector("#sosmed");
      let hr = document.querySelector("#hr");
      let hr2 = document.querySelector("#hr2");

      if (sideMenu.style.width === "15rem") {

        sideMenu.style.width = "3.6rem"
        main.style.marginLeft = "3.6rem"
        sosmed.classList.add("flex-column")
        hr.style.width = "2.6rem";
        hr2.style.width = "2.6rem";

      } else {
        sideMenu.style.width = "15rem"
        main.style.marginLeft = "15rem"
        sosmed.classList.remove("flex-column")
        hr.style.width = "13.8rem";
        hr2.style.width = "13.8rem";

      }
    }

  </script>
</body>

</html>