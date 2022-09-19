<?php
$requests = query("SELECT * FROM request");

?>

<div class="row row-cols-1 my-4 px-2">
  <?php foreach ($requests as $request) : ?>
    <div class="col-12 col-md-8">
      <div class="card my-2 p-3">
        <p class="">Artist: <strong><?= $request['artist'] ?></strong></p>
        <p class="">Judul Lagu: <strong><?= $request['title'] ?></strong></p>
        <p class="">Keterangan: <strong><?= $request['keterangan'] ?></strong></p>
      </div>
    </div>
  <?php endforeach; ?>
</div>