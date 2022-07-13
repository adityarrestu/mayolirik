<head>
  <title>Beranda - Mayo Lirik</title>
</head>

<?php 
  $contents = query("SELECT * FROM content");
?>

<p class="fs-5 mt-4">Postingan Terbaru <hr></p>

<div class="row row-cols-2 row-cols-md-3">
  <?php foreach($contents as $content) : ?>
    <div class="col">
      <a href="index.php?p=lyric&i=<?= $content['contentId']; ?>" class="text-decoration-none text-dark">
        <div class="card pb-3">
          <img src="./src/img/<?= $content['image']; ?>" id="card-img" alt="" class="card-img-top img-fluid">
          <p class="fw-bold m-2"><?= $content['title']; ?></p>
        </div>
      </a>
    </div>
  <?php endforeach; ?>
</div>