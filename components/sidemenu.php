<div id="sidemenu" class="bg-white border-end d-flex flex-column" style="width: 15rem; justify-content: space-between;">
  <div class="nav nav-pills flex-column p-3">
    <li class="nav-item">
      <a class="nav-link" aria-current="page" href="?p=beranda">Beranda</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Jepang</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Lainnya</a>
    </li>
    <hr>
    <li class="nav-item">
      <a class="nav-link" href="#">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Request</a>
    </li>
    <?php if(isset($_SESSION['username'])) : ?>
      <li class="nav-item">
        <a class="nav-link" href="?p=stricted">Dashboard</a>
      </li>
    <?php endif; ?>
    <hr>
  </div>

  <div class="d-flex p-3 align-items-center justify-content-end">
    <a href="" class="text-muted mx-1">
      <i class="bx bxl-facebook fs-4"></i>
    </a>
    <a href="" class="text-muted mx-1">
      <i class="bx bxl-twitter fs-4"></i>
    </a>
    <a href="" class="text-muted mx-1">
      <i class="bx bxl-instagram fs-4"></i>
    </a>
  </div>
</div>