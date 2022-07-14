<?php
$translations = query("SELECT * FROM translation");
?>

<div class="row row-cols-2 g-2 mt-2">
  <?php foreach ($translations as $tl) : ?>
    <?php
    $contentId = $tl['contentId'];
    $title = query("SELECT title FROM content WHERE contentId = '$contentId'")[0]['title'];
    ?>
    <div class="col">
      <div class="card px-2" style="height: 6rem;">
        <div class="row">
          <div class="col-10">
            <p class="card-title fs-5" style="height: 3.7rem;  overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;"><?= $title ?></p>
            <p class="text-secondary mb-2" style="font-size: 0.8rem;"><?= $tl['lang'] ?></p>
          </div>
          <div class="col-2">
            <form action="" method="POST">
              <input type="hidden" id="tlId" name="tlId" value="<?= $tl['tlId']; ?>">
              <button class="btn btn-info btn-sm px-2 pb-1 pt-2" name="edit-tl" data-bs-toggle="tooltip" title="Edit terjemahan">
                <i class='bx bxs-edit fs-5' style="color: #FFFFFF;"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>