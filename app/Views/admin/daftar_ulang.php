<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Ulang</h4>
                <div class="table-responsive">
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
                                        <a href="<?= base_url('admin/daftar_ulang/siswa/' . $s['id']) ?>" class="btn btn-dark btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal-1-<?= $s['id'] ?>"><i class="mdi mdi-file-lock-outline"></i> Daftar Ulang</a>
                                        <div class="modal fade" id="exampleModal-1-<?= $s['id'] ?>" tabindex="0" role="dialog"
                                            aria-labelledby="exampleModalLabel-1" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel-1">Daftar Ulang</h5>
                                                        <button clas type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Apakah anda yakin ingin melanjutkan daftar ulang siswa ini?</p>
                                                        <p class="text-dark"><b><?= $s['nama'] ?></b></p>
                                                        <p class="text-dark"><b><?= $s['nisn'] ?></b></p>
                                                        <p class="text-dark"><b><?= $s['jurusan'] ?></b></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-rounded" data-bs-dismiss="modal">Batal</button>
                                                        <a href="<?= base_url('admin/daftar_ulang/siswa/') . $s['id'] ?>" class="btn btn-dark btn-rounded">Daftar Ulang</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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