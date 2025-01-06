<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Siswa</h4>
                <?php if (session()->getFlashdata('message')): ?>
                    <div class="mt-3 alert alert-fill-primary alert-dismissible fade show" role="alert">
                        <?= session()->getFlashdata('message') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <a href="<?= base_url('admin/tambah_siswa') ?>" class="btn btn-primary btn-rounded btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-1"><i class="mdi mdi-plus"></i> Tambah Siswa</a>
                <div class="modal fade" id="exampleModal-1" tabindex="0" role="dialog"
                    aria-labelledby="exampleModalLabel-1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel-1">Tambah Siswa</h5>
                                <button clas type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="form-sample" action="<?= base_url('savePendaftaran') ?>" method="post">
                                    <div class="form-group mb-3">
                                        <label for="nama">Nama Lengkap <span class="text-danger">(GUNAKAN HURUF
                                                KAPITAL)</span></label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            placeholder="Masukkan Nama Lengkap" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select class="form-control form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="LAKI - LAKI">LAKI - LAKI</option>
                                            <option value="PEREMPUAN">PEREMPUAN</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="jurusan">Jurusan</label>
                                        <select class="form-control form-select" id="jurusan" name="jurusan" required>
                                            <option value="">Pilih Jurusan</option>
                                            <option value="AKUNTANSI DAN KEUANGAN LEMBAGA">AKUNTANSI DAN KEUANGAN LEMBAGA</option>
                                            <option value="TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI">TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI</option>
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
                                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
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
                                    <button type="submit" class="btn btn-primary btn-rounded">Simpan</button>
                                    <button type="button" class="btn btn-rounded" data-bs-dismiss="modal">Batal</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive mt-3">
                    <table class="table table-hover" id="order-listing">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama Siswa</th>
                                <th class="text-center">NISN</th>
                                <th class="text-center">Asal Sekolah</th>
                                <th class="text-center">Jurusan</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($siswa as $s) : ?>
                                <tr>
                                    <td class="text-center"><?= $no++ ?></td>
                                    <td class="text-left"><?= $s['nama'] ?></td>
                                    <td class="text-center"><?= $s['nisn'] ?></td>
                                    <td class="text-left"><?= $s['asal_sekolah'] ?></td>
                                    <td class="text-left"><?= $s['jurusan'] ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('admin/data_siswa/detail_siswa/' . $s['id']) ?>" class="btn btn-primary btn-sm btn-icon"><i class="mdi mdi-eye"></i> Detail</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>