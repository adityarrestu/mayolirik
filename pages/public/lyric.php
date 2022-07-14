<?php
  $contentId = $_GET['i'];

  $content = query("SELECT * FROM content WHERE contentId = '$contentId'");
  $title = $content[0]['title'];

  $lyricRmj = query("SELECT lyric FROM content WHERE title = '$title' AND lang = 'Romaji'");
  $lyricKnj = query("SELECT lyric FROM content WHERE title = '$title' AND lang = 'Jepang - Kanji'");
  $lyricIna = query("SELECT lyric FROM content WHERE title = '$title' AND lang = 'Indonesia'");
  $lyricEn = query("SELECT lyric FROM content WHERE title = '$title' AND lang = 'Inggris'");
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
      <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#romaji" role="tab" type="button" aria-current="page" href="#">Romaji</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" data-bs-target="#kanji" role="tab" type="button" href="#">Kanji</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" data-bs-target="#indonesia" role="tab" type="button" href="#">Indonesia</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" data-bs-target="#english" role="tab" type="button">English</a>
    </li>
  </ul>

  <!-- Tab Content -->
  <div class="tab-content" id="pills-tabContent">

    <!-- Lirik Romaji -->
    <div class="tab-pane fade show active" id="romaji" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
      <div class="py-4">
        <?php if($lyricRmj[0]['lyric'] == '') : ?>
          <p class="fs-5">
            Konten belum tersedia
          </p>  
        <?php endif; ?>
        
        <p class="fs-5">
          <?= nl2br($lyricRmj[0]['lyric']); ?>
        </p>
      </div>
    </div>

    <!-- Lirik Kanji -->
    <div class="tab-pane fade" id="kanji" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
      <div class="py-4">
        <?php if($lyricKnj[0]['lyric'] == '') : ?>
          <p class="fs-5">
            Konten belum tersedia
          </p>  
        <?php endif; ?>
        
        <p class="fs-5">
          <?= nl2br($lyricKnj[0]['lyric']); ?>
        </p>
      </div>
    </div>
    
    <!-- Lirik Indonesia -->
    <div class="tab-pane fade" id="indonesia" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
      <div class="py-4">
        <?php if($lyricIna[0]['lyric'] == '') : ?>
          <p class="fs-5">
            Konten belum tersedia
          </p>  
        <?php endif; ?>
        
        <p class="fs-5">
          <?= nl2br($lyricIna[0]['lyric']); ?>
        </p>
      </div>
    </div>
    
    <!-- Lirik Inggris -->
    <div class="tab-pane fade" id="english" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
      <div class="py-4">
        <?php if($lyricEn[0]['lyric'] == '') : ?>
          <p class="fs-5">
            Konten belum tersedia
          </p>  
        <?php endif; ?>
        
        <p class="fs-5">
          <?= nl2br($lyricEn[0]['lyric']); ?>
        </p>
      </div>
    </div>
  </div>
</div>