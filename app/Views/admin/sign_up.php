<?= $this->extend('admin/layout/login_template') ?>
<?= $this->section('content') ?>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo text-center">
                            <img src="https://skipatma.vercel.app/img/logo.png" alt="logo">
                        </div>
                        <h4 class="text-center">PPDB SMK ISLAM 45 WIRADESA</h4>
                        <h6 class="fw-light text-center">Pendaftaran User Admin</h6>
                        <form class="pt-3" method="post" action="<?= base_url('admin/storeAdmin') ?>">
                            <?php if (session()->getFlashdata('message')): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?= session()->getFlashdata('message') ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="exampleInputNama1" placeholder="Nama Lengkap" name="nama_admin" autofocus required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="exampleInputEmail1"
                                    placeholder="Username" name="username" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
                                    placeholder="Password" name="password" required>
                            </div>
                            <div class="mt-3 d-grid gap-2">
                                <button type="submit" class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn"
                                    href="https://demo.bootstrapdash.com/star-admin2-free/dist/themes/vertical-default-light/index.html">DAFTAR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<?= $this->endSection() ?>