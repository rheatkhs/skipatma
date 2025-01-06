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
                                <th class="text-center">NISN</th>
                                <th class="text-center">Jurusan</th>
                                <th class="text-center">Nama Admin</th>
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
                                    <td class="text-center"><?= $d['nisn'] ?></td>
                                    <td class="text-center"><?= $d['jurusan'] ?></td>
                                    <td class="text-center"><?= $d['admin'] ?></td>
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