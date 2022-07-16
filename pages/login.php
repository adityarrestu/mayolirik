<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../src/css/bootstrap.css">
  <link rel="stylesheet" href="../src/css/style.css">
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
  <title>Restricted - Mayo Lirik</title>
</head>


<?php
session_start();
require '../functions/connection.php';

// cek cookie 
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  // ambil username berdasarkan id
  $result = mysqli_query($conn, "SELECT username FROM users WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($key === hash('sha256', $row('username'))) {
    $_SESSION['login'] = true;
  }
}

$error = '';

if (isset($_POST['login'])) {

  $username = $_POST["username"];
  $password = $_POST["password"];
  $_SESSION["username"] = $_POST["username"];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

  // cek usenrame
  if (mysqli_num_rows($result) === 1) {

    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      // set session
      if ($_SESSION["login"] = true);
      $_SESSION["id"] = $row["id"];
    }

    echo '
      <script>
        window.location = "../index.php?p=restricted";
      </script>
    ';
  }
  $error = "Username atau password salah!";
}
?>

<!-- Login -->
<div class="container-fluid bg-dark vh-100">
  <div class="row d-flex align-items-center justify-content-center" style="min-height: 80vh">
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card">
        <div class="card-body px-5 py-4">

          <h2 class="card-title text-center my-4 mt-2">
            Login Admin
          </h2>

          <!-- Error Notification -->
          <?php if ($error != '') : ?>
            <div class="alert alert-danger" role="alert">
              <?= $error; ?>
            </div>
          <?php endif; ?>
          <!-- Form Login -->
          <form action="" method="POST">
            <!-- Username -->
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username">
            </div>
            <!-- Password -->
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary my-3" name="login">Login</button>
          </form>

        </div>
      </div>

    </div>

  </div>
</div>