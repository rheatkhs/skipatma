<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Pendaftaran Online PPDB SMK Islam 45 Wiradesa</title>
    <meta content="PPDB SMK Islam 45 Wiradesa" name="description">
    <meta content="PPDB, SMK Islam 45 Wiradesa" name="keywords">
    <!-- Favicons -->
    <link rel="shortcut icon" href="https://skipatma.vercel.app/img/logo.png">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/css/style8b89.css') ?>" rel="stylesheet">
    <!-- Datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="<?= base_url('assets/vendor/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') ?>">
    <!-- Sweet Alert -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.15.3/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<body>
    <section id="topbar" class="d-flex align-items-center ">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:smkislam45wiradesa@gmail.com">smkislam45wiradesa@gmail.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>(0285) 423415</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="https://www.tiktok.com/@smki45wiradesa" class="tiktok" target="_blank"><i
                        class="bi bi-tiktok"></i></a>
                <a href="https://www.facebook.com/smki45wiradesa" class="facebook" target="_blank"><i
                        class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/smkislam45wiradesa" class="instagram" target="_blank"><i
                        class="bi bi-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCBWUshHfK0-3cwwMlhKBAOg" class="youtube" target="_blank"><i
                        class="bi bi-youtube"></i></i></a>
            </div>
        </div>
    </section>
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo" style="font-size: 24px;"><a href="<?= base_url('/') ?>">SMK Islam 45 Wiradesa</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#pendaftaran">Pendaftaran</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1>Pendaftaran Online PPDB <span>2025</span></h1>
            <h2>Pendaftaran Online PPDB 2025 SMK Islam 45 Wiradesa.</h2>
            <!-- <a href="#persyaratan" class="btn-get-started scrollto">Persyaratan</a><br> -->
            <!-- <a href="<?= base_url('pendaftaran_online') ?>" class="btn-get-started mt-2">Formulir Pendaftaran Online</a> -->
        </div>
    </section>
    <main id="main">
        <section id="pendaftaran" class="faq section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Formulir</h2>
                    <h3>Formulir Pendaftaran<span> Siswa Baru</span></h3>
                    <p>

                    </p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <?php if (session()->getFlashdata('error')): ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?= session()->getFlashdata('error') ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    <strong>Perhatian!</strong> <br>
                                    <small>Pastikan Data Anda Sudah Benar Sebelum Menekan Tombol Daftar. <br>
                                        Setelah Daftar Silahkan Masuk Grup WhatsApp di <a class="fw-bold"
                                            href="https://smkislam45wiradesa.sch.id/grup_whatsapp"
                                            target="_blank">https://smkislam45wiradesa.sch.id/grup_whatsapp</a>
                                    </small>
                                </div>
                                <form id="formPendaftaran" action="<?= base_url('storePendaftaran') ?>" method="post">
                                    <div class="form-group mb-3">
                                        <label for="nama">Nama Lengkap <span class="text-danger">(GUNAKAN HURUF
                                                KAPITAL)</span></label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            placeholder="Masukkan Nama Lengkap" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select class="form-control form-select" id="jenis_kelamin" name="jenis_kelamin"
                                            required>
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="LAKI - LAKI">LAKI - LAKI</option>
                                            <option value="PEREMPUAN">PEREMPUAN</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="jurusan">Jurusan</label>
                                        <select class="form-control form-select" id="jurusan" name="jurusan" required>
                                            <option value="">Pilih Jurusan</option>
                                            <option value="AKUNTANSI DAN KEUANGAN LEMBAGA">AKUNTANSI DAN KEUANGAN
                                                LEMBAGA</option>
                                            <option value="TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI">TEKNIK JARINGAN
                                                KOMPUTER DAN TELEKOMUNIKASI</option>
                                            <option value="TEKNIK OTOMOTIF">TEKNIK OTOMOTIF</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="tempat_lahir">Tempat Lahir <span class="text-danger">(GUNAKAN HURUF
                                                KAPITAL)</span></label>
                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                            placeholder="Masukkan Tempat Lahir" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                            required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="alamat">Alamat Lengkap <span class="text-danger">(GUNAKAN HURUF
                                                KAPITAL)</span></label>
                                        <input type="text" class="form-control" id="alamat" name="alamat"
                                            placeholder="Masukkan Alamat Lengkap" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="asal_sekolah">Asal Sekolah <span class="text-danger">(GUNAKAN HURUF
                                                KAPITAL)</span></label>
                                        <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah"
                                            placeholder="Masukkan Asal Sekolah" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="nisn">NISN <span class="text-danger">(BISA DILIHAT DI IJAZAH
                                                SD/MI/SMP/MTs)</span></label>
                                        <input type="text" class="form-control" id="nisn" name="nisn"
                                            placeholder="Masukkan NISN" inputmode="numeric" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="nik">NIK</label>
                                        <input type="text" class="form-control" id="nik" name="nik"
                                            placeholder="Masukkan NIK" inputmode="numeric" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="no_wa">Nomor WhatsApp</label>
                                        <input type="text" class="form-control" id="no_wa" name="no_wa"
                                            placeholder="Masukkan Nomor WhatsApp" inputmode="numeric" required>
                                    </div>
                                    <button type="submit" class="btn btn-dark">Daftar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://skipatma.vercel.app/img/suzuki.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://skipatma.vercel.app/img/epson.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://skipatma.vercel.app/img/yamaha.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://skipatma.vercel.app/img/panasonic.png" width="70%" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://skipatma.vercel.app/img/gd.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://skipatma.vercel.app/img/pama.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 footer-contact">
                        <h3>SMK Islam 45 Wiradesa</h3>
                        <p>
                            Komplek Pondok Pesantren Al Amin Kauman <br>
                            Kec. Wiradesa Kab. Pekalongan <br>
                            Jawa Tengah <br>
                            51127 <br>
                            <strong>Phone:</strong> (0285) 423415<br>
                            <strong>Email:</strong> smkislam45wiradesa@gmail.com<br>
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-4 footer-links">
                        <h4>Kompetensi Keahlian</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Akuntansi dan Keuangan Lembaga </a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Teknik Jaringan Komputer dan
                                    Telekomunikasi</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Teknik Otomotif</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 footer-links">
                        <h4>Sosial Media</h4>
                        <div class="social-links mt-3">
                            <a href="https://www.tiktok.com/@smki45wiradesa" class="tiktok" target="_blank"><i
                                    class="bx bxl-tiktok"></i></a>
                            <a href="https://www.facebook.com/smki45wiradesa" class="facebook" target="_blank"><i
                                    class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/smkislam45wiradesa" class="instagram" target="_blank"><i
                                    class="bx bxl-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCBWUshHfK0-3cwwMlhKBAOg" class="youtube"><i
                                    class="bx bxl-youtube" target="_blank"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <?= date('Y') ?><span><strong> SMK Islam 45 Wiradesa</strong></span>
            </div>
        </div>
    </footer>
    <!-- <div id="preloader"></div> -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script src="<?= base_url('assets/vendor/jquery/jquery-3.5.1.js') ?>"></script>
    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/waypoints/noframework.waypoints.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
    <!-- Template Main JS File -->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/jquery/jquery-3.6.0.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.15.3/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#calonPesertaDidik').DataTable();
        });
    </script>
    <script>
        document.getElementById('formPendaftaran').addEventListener('submit', function(event) {
            event.preventDefault();
            Swal.fire({
                text: 'Pastikan Data Anda Sudah Benar Sebelum Menekan Tombol Daftar',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#118b50',
                cancelButtonColor: '#b7b7b7',
                confirmButtonText: 'Daftar',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            });
        });
    </script>
</body>

</html>