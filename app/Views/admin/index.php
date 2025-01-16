<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>

<div class="row">
    <div class="col-sm-12">
        <div class="statistics-details mb-0">
            <div class="row">
                <div class="col-sm-4 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <p class="card-title card-title-dash fw-medium">Total Siswa Baru</p>
                                <h3 class="rate-percentage d-flex justify-content-between"><?= $totalSiswaCount ?> </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <p class="card-title card-title-dash fw-medium">Siswa Daftar Ulang</p>
                                <h3 class="rate-percentage d-flex justify-content-between align-items-center"><?= $totalSiswaDaftarUlangCount ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <p class="card-title card-title-dash fw-medium">Siswa Belum Daftar Ulang</p>
                                <h3 class="rate-percentage d-flex justify-content-between"><?= $totalSiswaBelumDaftarUlangCount ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <h4 class="card-title">Jumlah Siswa Tiap Jurusan</h4>
                    </div>
                </div>
                <div class="money-flow">
                    <div class="chartjs-wrapper mt-4 modern-money-flow-height">
                        <div id="chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <h4 class="card-title">Pendaftar Terbaru</h4>
                    </div>
                </div>
                <div class="money-flow">
                    <div class="chartjs-wrapper mt-4 modern-money-flow-height">
                        <div class="table-responsive mt-3">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nama Siswa</th>
                                        <!-- <th>NISN</th> -->
                                        <th>Asal Sekolah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($get5LastSiswa as $s) : ?>
                                        <tr>
                                            <td><?= $s['nama'] ?></td>
                                            <!-- <td><?= $s['nisn'] ?></td> -->
                                            <td><?= $s['asal_sekolah'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    var options = {
        chart: {
            type: 'bar',
            height: 350
        },
        series: [{
            name: 'Jumlah Siswa',
            data: <?= json_encode($jurusanCounts) ?>
        }],
        xaxis: {
            categories: ['AKL', 'TJKT', 'TO']
        },
        colors: ['#172d88']
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
</script>
<?= $this->endSection() ?>