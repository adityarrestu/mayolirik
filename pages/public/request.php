<?php 
  if(isset($_POST['request'])) {
    
    $artist = stripslashes($_POST['artist']);
    $artist = mysqli_real_escape_string($conn, $artist);
    $title = stripslashes($_POST['title']);
    $title = mysqli_real_escape_string($conn, $title);
    $keterangan = stripslashes($_POST['keterangan']);
    $keterangan = mysqli_real_escape_string($conn, $keterangan);

    if(!empty(trim($artist)) && !empty(trim($title))) {

      $query = "INSERT INTO request VALUES ('', '$artist', '$title', '$keterangan')";
      $request = mysqli_query($conn, $query);

      if($request) {
        $status = "Request berhasil dikirim";

      } else {
        $error = "Terjadi kesalahan, request gagal dikirim!";
      }

    } 
  }

?>

<head>
  <title>Request Lirik - Mayo Lirik</title>
</head>

<form action="" method="POST" class="my-3 px-2">
  <p class="fs-3">Request Lirik</p>
  <!-- Status Notification -->
  <?php if ($status != '') : ?>
    <div class="alert alert-success" role="alert">
      <?= $status; ?>
    </div>
  <?php endif; ?>

  <!-- Error Notification -->
  <?php if($error != '') : ?>
    <div class="alert alert-danger" role="alert">
      <?= $error; ?>
    </div>
  <?php endif; ?>

  <div class="row row-cols-1 g-3">
    <div class="col-12 col-md-8">
      <label for="artist" class="form-label">Aritst</label>
      <input type="text" class="form-control" placeholder="Nama artist" id="artist" name="artist" required>
    </div>

    <div class="col-12 col-md-8">
      <label for="title" class="form-label">Judul</label>
      <input type="text" class="form-control" placeholder="Judul lagu" id="title" name="title" required>
    </div>

    <div class="col-12 col-md-8">
      <label for="keterangan" class="form-label">Tambahan</label>
      <input type="text" class="form-control" placeholder="Beri keterangan request, e.g.: request tejemahan" id="keterangan" name="keterangan">
    </div>
  </div>

  <div class="mt-4">
    <button type="submit" class="btn btn-primary" name="request">
      Kirim Request
    </button>
  </div>

</form>