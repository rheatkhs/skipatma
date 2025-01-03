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
                                        <a href="/admin/daftar_ulang/<?= $s['id'] ?>" class="btn btn-dark btn-sm btn-icon"><i class="mdi mdi-calendar-refresh-outline"></i> Daftar Ulang</a>
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