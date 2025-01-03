<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Ulang</h4>
                <div class="table-responsive">
                    <table class="table table-hover" id="dataSiswa">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>NISN</th>
                                <th>Asal Sekolah</th>
                                <th>Jurusan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($siswa as $s) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $s['nama'] ?></td>
                                    <td><?= $s['nisn'] ?></td>
                                    <td><?= $s['asal_sekolah'] ?></td>
                                    <td><?= $s['jurusan'] ?></td>
                                    <td>
                                        <!-- <a href="/admin/data_siswa/<?= $s['id'] ?>" class="btn btn-primary btn-sm btn-rounded btn-icon"><i class="mdi mdi-eye"></i> Detail</a> -->
                                        <a href="/admin/daftar_ulang/<?= $s['id'] ?>" class="btn btn-dark btn-sm btn-rounded btn-icon"><i class="mdi mdi-calendar-refresh-outline"></i> Daftar Ulang</a>
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