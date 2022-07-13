<!-- Preview Image -->
<div class="col-12 my-2 position-relative">
  <button type="button" class="btn-close d-none" id="close" aria-label="Close"></button>
  <div class=" d-flex align-items-center justify-content-center">
    <img src="./src/img/<?= $image; ?>" class="img-fluid" id="preview" style="max-height: 64vh;" alt="">
  </div>
</div>

<!-- New Content Form-->
<form action="" method="POST" class="my-2 px-2" enctype="multipart/form-data">
  <p class="fs-4">
    <?php if (isset($_POST['edit'])) : ?>
      Edit
    <?php else : ?>
      New
    <?php endif; ?>
    Content
  </p>

  <div class="row row-cols-1 g-3">
    <!-- Input Image -->
    <div class="col-12 col-md-8">
      <label for="gambar" class="form-label">Sampul</label>
      <input type="file" class="form-control" id="gambar" name="gambar" onchange="previewImg(event)" value="<?= $image; ?>" <?php if (isset($_POST['translation'])) echo 'disabled'; ?>>
    </div>

    <!-- Input Title -->
    <div class="col-12 col-md-8">
      <label for="title" class="form-label">Judul</label>
      <input type="text" class="form-control" placeholder="Judul" id="title" name="title" value="<?= $title; ?>" <?php if (isset($_POST['translation'])) echo 'disabled'; ?>>
    </div>

    <!-- Input Language -->
    <div class="col-12 col-md-8">
      <label for="bahasa" class="form-label">Bahasa</label>
      <select class="form-select" id="bahasa" name="bahasa" aria-label="pilih bahasa" value="<?= $lang; ?>">
        <option selected disabled value="">Pilih bahasa</option>
        <?php foreach ($languages as $language) : ?>
          <option value="<?= $language['lang']; ?>" <?= ($lang == $language['lang']) ? 'selected' : ''; ?>><?= $language['lang']; ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <!-- Input Lyric -->
    <div class="col-12 col-md-8">
      <label for="lirik" class="form-label">Lirik</label>
      <textarea class="form-control" placeholder="Lirik lagu" name="lirik" id="lirik" style="min-height: 100px;"><?= $lyric; ?></textarea>
    </div>

    <!-- Content Id -->
    <input type="hidden" id="contentId" name="contentId" value="<?= $contentId; ?>">

    <!-- Button -->
    <div class="justify-content-start">
      <?php if (isset($_POST['edit'])) : ?>
        <!-- Edit Button -->
        <button type="submit" class="btn btn-primary" name="edit-content">Simpan Perubahan</button>
        <a href="?p=stricted" class="mx-2">
          <button type="button" class="btn btn-secondary">Batal</button>
        </a>

      <?php elseif (isset($_POST['translation'])) : ?>
        <!-- Translation Button -->
        <button type="submit" class="btn btn-primary" name="tl">Tambah Terjemahan</button>
        <a href="?p=stricted" class="mx-2">
          <button type="button" class="btn btn-secondary">Batal</button>
        </a>

      <?php else : ?>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
      <?php endif; ?>

    </div>
  </div>
</form>