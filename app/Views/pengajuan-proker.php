<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Program Kerja Universitas Dr. Soetomo</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo-unitomo.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="/dashboard" class="text-nowrap logo-img">
            <img src="../assets/images/logos/logo-unitomo.png" width="50" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/dashboard" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Program Kerja</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/pengajuan-proker" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Pengajuan Program Kerja</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/login" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Logout</span>
              </a>
            </li>
          </ul>
          <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
            <div class="d-flex"></div>
          </div>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle" />
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">
                Form Pengajuan Program Kerja
              </h5>
              <div class="card">
                <div class="card-body">
                  <form action="/proker" method="post">
                    <div class="mb-3">
                      <label for="namaProker" class="form-label">Nama Kegiatan Program Kerja</label>
                      <input type="text" class="form-control" id="namaProker" name="namaProker" />
                    </div>
                    <div class="mb-3">
                      <label for="tujuanProker" class="form-label">Tujuan Program Kerja</label>
                      <textarea class="form-control" id="tujuanProker" name="tujuanProker" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="targetJumlah" class="form-label">Target Program Kerja</label>
                      <input type="number" class="form-control" id="targetJumlah" name="targetJumlah" />
                    </div>
                    <div class="mb-3">
                      <label for="namaPenanggungJawab" class="form-label">Nama Penanggung Jawab</label>
                      <input type="text" class="form-control" id="namaPenanggungJawab" name="namaPenanggungJawab" />
                    </div>
                    <div class="mb-3">
                      <label for="emailPenanggungJawab" class="form-label">Email Penanggung Jawab</label>
                      <input type="email" class="form-control" id="emailPenanggungJawab" />
                    </div>
                    <div class="mb-3">
                      <label for="tlpPenanggungJawab" class="form-label">No. Telepon Penangung Jawab</label>
                      <input type="tel" class="form-control" id="tlpPenanggungJawab" name="tlpPenanggungJawab" />
                    </div>
                    <div class="mb-3">
                      <label for="anggaran" class="form-label">Anggaran yang Akan Di ajukan</label>
                      <input type="number" class="form-control" id="anggaran" name="anggaran" />
                    </div>
                    <button type="submit" class="btn btn-primary">
                      Submit
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>