<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin | Login Page</title>
    <link rel="stylesheet" href="<?= base_url('admin/assets/vendors/feather/feather.css') ?>">
    <link rel="stylesheet" href="<?= base_url('admin/assets/vendors/mdi/css/materialdesignicons.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('admin/assets/vendors/ti-icons/css/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('admin/assets/vendors/typicons/typicons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('admin/assets/vendors/simple-line-icons/css/simple-line-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('admin/assets/vendors/css/vendor.bundle.base.css') ?>">
    <link rel="stylesheet" href="<?= base_url('admin/assets/css/vertical-layout-light/style.css') ?>">

    <!-- <link rel="stylesheet" href="<?= base_url('admin/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') ?>"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />

    <link rel="shortcut icon" href="https://skipatma.vercel.app/img/logo.png" />
</head>

<body>
    <?= $this->renderSection('content') ?>
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
    <!-- <script src="<?= base_url('admin/assets/vendors/datatables.net/jquery.dataTables.js') ?>"></script> -->
    <!-- <script src="<?= base_url('admin/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') ?>"></script> -->
    <!-- <script src="<?= base_url('admin/assets/js/data-table.js') ?>"></script> -->

    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#order-listing').DataTable();
        });
    </script>
</body>

</html>