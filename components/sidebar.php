<?php 
  $contents = query("SELECT * FROM content");
?>

<p class="fs-5 mt-4">Postingan Lainnya <hr></p>

<div class="row row-cols-1 g-2 mt-2">
  <?php foreach($contents as $content) : ?>
    <div class="col">
      <a href="index.php?p=lyric&i=<?= $content['contentId']; ?>" class="text-decoration-none text-dark">
        <div class="card">
          <p class="m-2"><?= $content['title']; ?></p>
        </div>
      </a>
    </div>
  <?php endforeach; ?>
</div>