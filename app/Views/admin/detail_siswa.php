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
            <div>
                <a href="<?= base_url('admin/hapus_siswa/') . $siswa['id'] ?>" class="btn btn-danger btn-sm btn-icon"><i class="mdi mdi-trash-can"></i> Hapus</a>
                <a href="<?= base_url('admin/edit_siswa/') . $siswa['id'] ?>" class="btn btn-primary btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal-2"><i class="mdi mdi-pencil"></i> Edit</a>
                <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel-2">Edit Siswa</h5>
                                <button clas type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="form-sample" action="<?= base_url('admin/saveSiswa/' . $siswa['id']) ?>" method="post">
                                    <div class="form-group mb-3">
                                        <label for="nama">Nama Lengkap <span class="text-danger">(GUNAKAN HURUF
                                                KAPITAL)</span></label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            placeholder="Masukkan Nama Lengkap" value="<?= $siswa['nama'] ?>" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select class="form-control form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="LAKI - LAKI" <?= isset($siswa['jenis_kelamin']) && $siswa['jenis_kelamin'] === 'LAKI - LAKI' ? 'selected' : '' ?>>LAKI - LAKI</option>
                                            <option value="PEREMPUAN" <?= isset($siswa['jenis_kelamin']) && $siswa['jenis_kelamin'] === 'PEREMPUAN' ? 'selected' : '' ?>>PEREMPUAN</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="jurusan">Jurusan</label>
                                        <select class="form-control form-select" id="jurusan" name="jurusan" required>
                                            <option value="">Pilih Jurusan</option>
                                            <option value="AKUNTANSI DAN KEUANGAN LEMBAGA" <?= isset($siswa['jurusan']) && $siswa['jurusan'] === 'AKUNTANSI DAN KEUANGAN LEMBAGA' ? 'selected' : '' ?>>AKUNTANSI DAN KEUANGAN LEMBAGA</option>
                                            <option value="TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI" <?= isset($siswa['jurusan']) && $siswa['jurusan'] === 'TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI' ? 'selected' : '' ?>>TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI</option>
                                            <option value="TEKNIK OTOMOTIF" <?= isset($siswa['jurusan']) && $siswa['jurusan'] === 'TEKNIK OTOMOTIF' ? 'selected' : '' ?>>TEKNIK OTOMOTIF</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="tempat_lahir">Tempat Lahir <span class="text-danger">(GUNAKAN HURUF
                                                KAPITAL)</span></label>
                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                            placeholder="Masukkan Tempat Lahir" value="<?= $siswa['tempat_lahir'] ?>" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $siswa['tanggal_lahir'] ?>"
                                            required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="alamat">Alamat Lengkap <span class="text-danger">(GUNAKAN HURUF
                                                KAPITAL)</span></label>
                                        <input type="text" class="form-control" id="alamat" name="alamat"
                                            placeholder="Masukkan Alamat Lengkap" value="<?= $siswa['alamat'] ?>" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="asal_sekolah">Asal Sekolah <span class="text-danger">(GUNAKAN HURUF
                                                KAPITAL)</span></label>
                                        <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah"
                                            placeholder="Masukkan Asal Sekolah" value="<?= $siswa['asal_sekolah'] ?>" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="nisn">NISN <span class="text-danger">(BISA DILIHAT DI IJAZAH
                                                SD/MI/SMP/MTs)</span></label>
                                        <input type="text" class="form-control" id="nisn" name="nisn"
                                            placeholder="Masukkan NISN" inputmode="numeric" value="<?= $siswa['nisn'] ?>" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="nik">NIK</label>
                                        <input type="text" class="form-control" id="nik" name="nik"
                                            placeholder="Masukkan NIK" inputmode="numeric" value="<?= $siswa['nik'] ?>" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="no_wa">Nomor WhatsApp</label>
                                        <input type="text" class="form-control" id="no_wa" name="no_wa"
                                            placeholder="Masukkan Nomor WhatsApp" inputmode="numeric" value="<?= $siswa['no_wa'] ?>" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-rounded">Simpan</button>
                                    <button type="button" class="btn btn-rounded" data-bs-dismiss="modal">Batal</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (session()->getFlashdata('message')): ?>
                <div class="mt-3 alert alert-fill-primary alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('message') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <div class="table-responsive mt-3">
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