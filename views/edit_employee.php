<?php
include "../php/db.php";
$id_pegawai = $_GET['id_pegawai'];
$query = mysqli_query($konek, "SELECT * from pegawai where id_pegawai=$id_pegawai");
$data = mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="../assets/icon.png" />

    <title>Tambah Pegawai</title>
    <link
      href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css"
      rel="stylesheet"
    />
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <script
      src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <!-- Navbar Brand-->
      <a class="navbar-brand ps-3" href="dashboard.php">Manajemen Pegawai</a>
      <!-- Sidebar Toggle-->
      <button
        class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0"
        id="sidebarToggle"
        href="#!"
      >
        <i class="fas fa-bars"></i>
      </button>
      <!-- Navbar Search-->
      <form
        class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"
      >
        <div class="input-group">
          <input
            class="form-control"
            type="text"
            placeholder="Search for..."
            aria-label="Search for..."
            aria-describedby="btnNavbarSearch"
          />
          <button class="btn btn-primary" id="btnNavbarSearch" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>
      <!-- Navbar-->
      <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            id="navbarDropdown"
            href="#"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            ><i class="fas fa-user fa-fw"></i
          ></a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdown"
          >

            <li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <div class="nav">
              <div class="sb-sidenav-menu-heading">Menu Utama</div>
              <a class="nav-link" href="dashboard.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-tachometer-alt"></i>
                </div>
                Dashboard
              </a>
              <div class="sb-sidenav-menu-heading">Manajemen Pegawai</div>
              <a class="nav-link" href="employee_list.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-chart-area"></i>
                </div>
                Daftar Pegawai
              </a>
              <a class="nav-link" href="add_edit_employee.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-chart-area"></i>
                </div>
                Tambah Pegawai
              </a>
              <a class="nav-link" href="employee_detail.php">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Detail Pegawai
              </a>
            </div>
          </div>
        </nav>
      </div>
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Pegawai</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item">
                <a href="dashboard.php">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Edit Pegawai</li>
            </ol>
            <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Edit Pegawai
              </div>
              
              <div class="card-body">

                <div class="card-body">

                <form action="../php/edit_process.php" method="post">
                <input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai; ?>">
                <div class="row mb-3">
                    <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="nama_pegawai" name="nama_pegawai"
                            placeholder="Silahkan isi nama" value="<?php echo $data['nama_pegawai']; ?>" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Posisi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="posisi" name="posisi"
                            placeholder="Silahkan isi posisi" value="<?php echo $data['posisi']; ?>" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Umur</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="umur" name="umur"
                            placeholder="Silahkan isi umur" min="1" value="<?php echo $data['umur']; ?>" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat"
                            placeholder="Silahkan isi alamat" value="<?php echo $data['alamat']; ?>" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Gaji</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="gaji" name="gaji"
                            placeholder="Silahkan isi gaji" min="0" value="<?php echo $data['gaji']; ?>" required>
                    </div>
                </div>

                <div class="text">
                    <button type="submit" class="btn btn-secondary">Edit Data</button>
                </div>
            </form>

                </div>
              </div>
            </div>
          </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
            <div
              class="d-flex align-items-center justify-content-between small"
            >
              <div class="text-muted">Mohamad Risqi Aditiya</div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="js/scripts.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="../js/main.js"></script>
    <script src="../js/scripts.js"></script>
  </body>
</html>
