<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin | <?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url('admin/assets/vendors/feather/feather.css') ?>">
    <link rel="stylesheet" href="<?= base_url('admin/assets/vendors/mdi/css/materialdesignicons.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('admin/assets/vendors/ti-icons/css/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('admin/assets/vendors/typicons/typicons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('admin/assets/vendors/simple-line-icons/css/simple-line-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('admin/assets/vendors/css/vendor.bundle.base.css') ?>">
    <link rel="stylesheet" href="<?= base_url('admin/assets/css/vertical-layout-light/style.css') ?>">
    <link rel="shortcut icon" href="https://skipatma.vercel.app/img/logo.png" />
</head>

<body class="with-welcome-text">
    <div class="container-scroller">
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <div class="me-3">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                </div>
                <div>
                    <a class="navbar-brand brand-logo" href="../index.html">
                        <img src="https://skipatma.vercel.app/img/logo.png" alt="logo" />
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="../index.html">
                        <img src="https://skipatma.vercel.app/img/logo.png" alt="logo" />
                    </a>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-top">
                <ul class="navbar-nav">
                    <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                        <h1 class="welcome-text">Selamat Pagi, <span class="text-black fw-bold">Orang Hitam</span></h1>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                        <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="img-xs rounded-circle" src="https://skipatma.vercel.app/img/logo.png" alt="Profile image"> </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <div class="dropdown-header text-center">
                                <img class="img-sm rounded-circle" src="https://skipatma.vercel.app/img/logo.png" alt="Profile image">
                                <p class="mb-1 mt-3 font-weight-semibold">Nama Admin</p>
                                <p class="fw-light text-muted mb-0">email@admin.com</p>
                            </div>
                            <a class="dropdown-item" href="<?= base_url('admin/sign_out') ?>"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-bs-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
                            <i class="mdi mdi-grid-large menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">Data Master</li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/data_siswa') ?>">
                            <i class="menu-icon mdi mdi-account-group-outline"></i>
                            <span class="menu-title">Data Siswa</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <li class="nav-item nav-category">Pendaftaran</li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/daftar_ulang') ?>">
                            <i class="menu-icon mdi mdi-account-file-outline"></i>
                            <span class="menu-title">Daftar Ulang</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <?= $this->renderSection('content') ?>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Design with ⚡ by <a
                                href="https://github.com/rheatkhs" target="_blank">SMK Islam 45 Wiradesa</a>.</span>
                        <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © <?= date('Y') ?>. All rights reserved.</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="<?= base_url('admin/assets/vendors/js/vendor.bundle.base.js') ?>"></script>
    <script src="<?= base_url('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url('admin/assets/vendors/chart.js/Chart.min.js') ?>"></script>
    <script src="<?= base_url('admin/assets/vendors/progressbar.js/progressbar.min.js') ?>"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url('admin/assets/js/off-canvas.js') ?>"></script>
    <script src="<?= base_url('admin/assets/js/hoverable-collapse.js') ?>"></script>
    <script src="<?= base_url('admin/assets/js/template.js') ?>"></script>
    <script src="<?= base_url('admin/assets/js/settings.js') ?>"></script>
    <script src="<?= base_url('admin/assets/js/todolist.js') ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?= base_url('admin/assets/js/jquery.cookie.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('admin/assets/js/dashboard.js') ?>"></script>
    <script src="<?= base_url('admin/assets/js/proBanner.js') ?>"></script>
</body>

</html>