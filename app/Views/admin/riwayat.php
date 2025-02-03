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
                                <th class="text-center">Timestamp</th>
                                <th class="text-center">Nama Siswa</th>
                                <!-- <th class="text-center">NISN</th> -->
                                <th class="text-center">Jurusan</th>
                                <th class="text-center">Nama Admin</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($daftar_ulang as $d) : ?>
                                <tr>
                                    <td class="text-center"><?= $no++ ?></td>
                                    <td class="text-center"><?= $d['timestamp'] ?></td>
                                    <td class="text-center"><?= $d['nama'] ?></td>
                                    <!-- <td class="text-center"><?= $d['nisn'] ?></td> -->
                                    <td class="text-center"><?= $d['jurusan'] ?></td>
                                    <td class="text-center"><?= $d['admin'] ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('admin/batal/' . $d['id']) ?>" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-1"><i class="mdi mdi-trash-can"></i> Batal</a>
                                        <div class="modal fade" id="exampleModal-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Batal Daftar Ulang</h5>
                                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Apakah anda yakin ingin membatalkan daftar ulang ini?</p>
                                                        <p class="text-danger"><b><?= $d['nama'] ?></b></p>
                                                        <p class="text-danger"><b><?= $d['nisn'] ?></b></p>
                                                        <p class="text-danger"><b><?= $d['jurusan'] ?></b></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-rounded" data-bs-dismiss="modal">Close</button>
                                                        <a href="<?= base_url('admin/batal/' . $d['id']) ?>" class="btn btn-danger btn-rounded">Batal</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="<?= base_url('admin/kuitansi/' . $d['id']) ?>" class="btn btn-dark btn-sm"><i class="mdi mdi-file-lock-outline"></i> Kuitansi</a>
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