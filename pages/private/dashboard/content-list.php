<div class="row row-cols-2 row-cols-md-3 my-2">
  <?php foreach ($contents as $content) : ?>
    <div class="col">
      <div class="card my-2" style="height: 18rem;">
        <a href="index.php?p=lyric&i=<?= $content['contentId']; ?>" class="text-decoration-none text-dark">
          <!-- Image Content -->
          <img src="./src/img/<?= $content['image']; ?>" id="card-img" alt="" class="card-img-top img-fluid">
          <!-- Title Content -->
          <p class="fw-bold m-2" style="height: 3.2rem;  overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;"><?= $content['title']; ?></p>
        </a>

        <!-- Option Button -->
        <div class="d-flex m-2">
          <!-- Delete Button -->
          <div data-bs-toggle="tooltip" title="Delete content">
            <button 
              class="btn btn-danger btn-sm px-2 pb-1 pt-2" 
              data-bs-toggle="modal" 
              data-bs-target="#delete" 
              data-bs-content="<?= $content['contentId'] ?>">
              <i class="bx bxs-trash fs-4"></i>
            </button>
          </div>

          <form action="" method="POST">
            <input type="hidden" name="id" value="<?= $content['contentId'] ?>">

            <!-- Edit Button -->
            <button class="btn btn-info btn-sm px-2 pb-1 pt-2 ms-2" 
              name="edit" 
              data-bs-toggle="tooltip" 
              title="Edit content"
            >
              <i class='bx bxs-edit fs-4' style="color: #FFFFFF;"></i>
            </button>

            <!-- Translation Button -->
            <button 
              class="btn btn-success btn-sm px-2 pb-1 pt-2 ms-1" 
              name="translation" 
              data-bs-toggle="tooltip" 
              title="Add translation"
            >
              <i class='bx bxs-captions fs-4'></i>
            </button>

          </form>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<!-- Modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus Content</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Ingin menghapus content ini?
      </div>
      <div class="modal-footer">
        <form action="" method="POST">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <input type="hidden" id="contentId" name="contentId" value="">
          <button id="hapus" name="hapus" class="btn btn-danger">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  const modal = document.getElementById('delete')
  modal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    const id = button.getAttribute('data-bs-content')

    // Update the modal's content.
    const contentId = modal.querySelector('#contentId')
    console.log(contentId)
    console.log(id)

    contentId.value = id
    console.log(contentId)
  })

  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>