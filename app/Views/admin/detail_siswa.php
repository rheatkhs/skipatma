<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Detail Siswa</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/data_siswa') ?>">Data Siswa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Siswa</li>
                </ol>
            </nav>
            <div class="table-responsive">
                <table class="table table-borderless table-hover">
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?= $siswa['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>NISN</td>
                            <td>:</td>
                            <td><?= $siswa['nisn'] ?></td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>:</td>
                            <td><?= $siswa['nik'] ?></td>
                        </tr>
                        <tr>
                            <td>Asal Sekolah</td>
                            <td>:</td>
                            <td><?= $siswa['asal_sekolah'] ?></td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td>:</td>
                            <td><?= $siswa['jurusan'] ?></td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td><?= $siswa['tempat_lahir'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td><?= $siswa['tanggal_lahir'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td><?= $siswa['jenis_kelamin'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?= $siswa['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>No. WhatsApp</td>
                            <td>:</td>
                            <td><?= $siswa['no_wa'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>