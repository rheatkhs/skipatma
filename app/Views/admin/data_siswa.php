<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Siswa</h4>
                <div class="table-responsive">
                    <table class="table table-hover" id="order-listing">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="text-center">Nama Siswa</th>
                                <th class="text-center">NISN</th>
                                <th class="text-center">Asal Sekolah</th>
                                <!-- <th>Jurusan</th> -->
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($siswa as $s) : ?>
                                <tr>
                                    <td class="text-center"><?= $no++ ?></td>
                                    <td><?= $s['nama'] ?></td>
                                    <td class="text-center"><?= $s['nisn'] ?></td>
                                    <td class="text-left"><?= $s['asal_sekolah'] ?></td>
                                    <!-- <td><?= $s['jurusan'] ?></td> -->
                                    <td class="text-center">
                                        <a href="/admin/data_siswa/<?= $s['id'] ?>" class="btn btn-primary btn-sm btn-rounded"><i class="mdi mdi-eye"></i> Detail</a>
                                        <a href="/admin/data_siswa/edit/<?= $s['id'] ?>" class="btn btn-warning btn-sm btn-rounded btn-icon"><i class="mdi mdi-pencil"></i> Edit</a>
                                        <form action="/admin/data_siswa/delete/<?= $s['id'] ?>" method="POST" class="d-inline">
                                            <button type="submit" class="btn btn-danger btn-sm btn-rounded btn-icon" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                                <i class="mdi mdi-delete"></i> Hapus
                                            </button>
                                        </form>
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