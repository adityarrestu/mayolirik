<?php
  $contentId = $_GET['i'];

  $content = query("SELECT * FROM content WHERE contentId = '$contentId'");

  $translations = query("SELECT * FROM translation WHERE contentId = '$contentId'");

  $lyricRmj = query("SELECT lyric FROM translation WHERE contentId = '$contentId' AND lang = 'Romaji'");
  $lyricKnj = query("SELECT lyric FROM translation WHERE contentId = '$contentId' AND lang = 'Kanji'");
  $lyricIna = query("SELECT lyric FROM translation WHERE contentId = '$contentId' AND lang = 'Indonesia'");
  $lyricEn = query("SELECT lyric FROM translation WHERE contentId = '$contentId' AND lang = 'Inggris'");
?>

<head>
  <title><?= $content[0]['title']; ?> - Mayo Lirik</title>
</head>

<div class="my-4 px-2">
  <h3><?= $content[0]['title']; ?></h3>
  <img src="./src/img/<?= $content[0]['image']; ?>" class="mx-auto d-block my-4" style="max-width: 30rem;" alt="">

  <!-- Tab Navigation -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#<?= $content[0]['lang'] ?>" role="tab" type="button" aria-current="page" href="#"><?= $content[0]['lang'] ?></a>
    </li>
    <?php foreach($translations as $tl) : ?>      
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#<?= $tl['lang'] ?>" role="tab" type="button" href="#"><?= $tl['lang'] ?></a>
      </li>
    <?php endforeach; ?>
  </ul>

  <!-- Tab Content -->
  <div class="tab-content" id="pills-tabContent">

    <!-- Lirik Main Content -->
    <div class="tab-pane fade show active" id="<?= $content[0]['lang'] ?>" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
      <div class="py-4">
        <p class="fs-5">
          <?= nl2br($content[0]['lyric']); ?>
        </p>
      </div>
    </div>
    
    <?php foreach($translations as $tl) : ?>
      <!-- Lirik Translation -->
      <div class="tab-pane fade" id="<?= $tl['lang'] ?>" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
        <div class="py-4">
          <p class="fs-5">
            <?= nl2br($tl['lyric']); ?>
          </p>
        </div>
      </div>
    <?php endforeach; ?>
    
  </div>
</div>