<style>
  #sidemenu {
    width: 15rem;
    justify-content: space-between;
  }

  #main {
    margin-left: 15rem;
    transition: 0.5s;
  }

  #hr {
    width: 13.8rem;
    transition: .5s;
  }

  #hr2 {
    width: 13.8rem;
    transition: .5s;
  }

  @media (max-width: 992px) {
    #sidemenu {
      width: 3.6rem;
    }

    #main {
      margin-left: 3.5rem;
    }

    #hr {
      width: 2.6rem;
    }

    #hr2 {
      width: 2.6rem;
    }
  }
</style>

<div id="sidemenu" class="bg-white border-end d-flex flex-column">
  <div class="nav nav-pills flex-column p-2 pt-2">
    <li class="nav-item">
      <a class="nav-link text-dark text-nowrap" aria-current="page" href="?p=beranda">
        <i class='bx bx-home-alt-2 me-3'></i>
        Beranda
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark text-nowrap accordion-button collapsed px-3 py-2" id="jepang" data-bs-toggle="collapse" data-bs-target="#jepangAcc" href="#">
        <i class='bx bx-folder me-4'></i>
        Jepang
      </a>
      <div id="jepangAcc" class="accordion-collapse collapse" data-bs-parent="#jepang">
        <div class="accordion-body pb-0">
          <ul class="list-unstyled ms-5">
            <li class="mb-2">
              <a class="text-decoration-none text-dark" href="">Anisong</a>
            </li>
            <li class="mb-2">
              <a class="text-decoration-none  text-dark" href="">Vocaloid</a>
            </li>
            <li class="mb-2">
              <a class="text-decoration-none  text-dark" href="">JPop</a>
            </li>
            <li class="mb-2">
              <a class="text-decoration-none  text-dark" href="">Hololive</a>
            </li>
          </ul>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark text-nowrap accordion-button collapsed px-3 py-2" id="lain" data-bs-toggle="collapse" data-bs-target="#lainAcc" href="#">
        <i class='bx bx-folder me-4'></i>
        Lainnya
      </a>
      <div id="lainAcc" class="accordion-collapse collapse" data-bs-parent="#lain">
        <div class="accordion-body pb-0">
          <ul class="list-unstyled ms-5">
            <li class="mb-2">
              <a class="text-decoration-none text-dark" href="">Game</a>
            </li>
            <li class="mb-2">
              <a class="text-decoration-none  text-dark" href="">Lainnya</a>
            </li>
          </ul>
        </div>
      </div>
    </li>
    <hr id="hr">
    <li class="nav-item">
      <a class="nav-link text-dark text-nowrap" href="?p=about">
        <i class='bx bx-info-circle me-3'></i>
        About
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark text-nowrap" href="?p=request">
        <i class='bx bx-send me-3'></i>
        Request
      </a>
    </li>
    <?php if (isset($_SESSION['username'])) : ?>
      <li class="nav-item">
        <a class="nav-link text-dark text-nowrap" href="?p=stricted">
          <i class='bx bxs-dashboard me-3'></i>
          Dashboard
        </a>
      </li>
    <?php endif; ?>
    <hr id="hr2">
  </div>

  <div class="d-flex p-3 align-items-center justify-content-end" id="sosmed">
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