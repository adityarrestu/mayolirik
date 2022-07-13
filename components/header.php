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
  $username = $_SESSION['username'];

  $query = query("SELECT * FROM users WHERE username = '$username'");
}
?>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
    <div class="container-fluid">
      <!-- Toggler Button -->
      <div class="mx-2 d-block" id="btn-wrap" type="button">
        <span class="navbar-toggler-icon"></span>
      </div>
      <a class="navbar-brand" href="#">MAYOLIRIK
        <img src="" style="max-height: 2.8rem" alt="" />
      </a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Search Box -->
      <div class="collapse navbar-collapse ms-5 ps-5" id="collapsibleNavId">
          <form class="d-flex my-2 my-lg-0">
            <input
              class="form-control me-sm-2"
              type="text"
              placeholder="Search"
            />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
              Search
            </button>
          </form>
        </div>
    </div>
    
    <!-- Logout Button -->
    <?php if(isset($_SESSION['username'])) : ?>
      <a href="./functions/logout.php">
        <button class="btn btn-danger mx-2">
          Logout
        </button>
      </a>
    <?php endif; ?>
  </nav>
</body>

</html>