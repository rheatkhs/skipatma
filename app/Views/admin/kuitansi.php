<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Kuitansi Pembayaran</h4>
            <div class="print-div">
                <div class="container-fluid d-flex justify-content-between">
                    <div class="col-lg-4 ps-0">
                        <p class="mt-4 mb-2"><b>SMK Islam 45 Wiradesa</b></p>
                        <p>Komplek Pondok Pesantren Al Amin Kauman <br>
                            Kec. Wiradesa Kab. Pekalongan <br>
                            Jawa Tengah <br>
                            51127</p>
                    </div>
                    <div class="col-lg-3 pr-0">
                        <p class="mt-4 mb-2 text-right"><b>Kuitansi Pembayaran Daftar Ulang</b></p>
                        <p class="text-right"><?= $siswa['nama'] ?> <br><?= $siswa['nisn'] ?> <br><?= $siswa['asal_sekolah'] ?></p>
                    </div>
                </div>
                <div class="container-fluid d-flex justify-content-between">
                    <div class="col-lg-6 ps-0">
                        <p class="mb-0 mt-5">Tanggal : <?= date('d-m-Y H:i:s', strtotime($daftar_ulang['timestamp'])) ?></p>
                        <p>Jurusan : <span class="fw-bold text-primary"><?= $siswa['jurusan'] ?></span></p>
                    </div>
                </div>
                <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                    <div class="table-responsive w-100">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="bg-dark text-white">
                                    <th>#</th>
                                    <th>Deskripsi</th>
                                    <th class="text-right">Qty</th>
                                    <th class="text-right">Subtotal</th>
                                    <th class="text-right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-right">
                                    <td class="text-left">1</td>
                                    <td class="text-left">Daftar Ulang Siswa Baru</td>
                                    <td>1</td>
                                    <td>Rp. 500.000,00</td>
                                    <td>Rp. 500.000,00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="container-fluid mt-5 w-100">
                    <p class="text-right">Dengan ini menyatakan bahwa <span class="fw-bold text-primary"><?= $siswa['nama'] ?></span> telah <span class="fw-bold text-primary">LUNAS</span> pembayaran Daftar Ulang SMK Islam 45 Wiradesa.</p>
                    <p class="text-right mt-5 mb-2">Pekalongan, <?= date('d-m-Y') ?></p>
                    <div id="qrcode"></div>
                    <p class="text-right mt-2"><?= $admin['nama_admin'] ?></p>
                </div>
            </div>
            <div class="container-fluid w-100">
                <button class="btn btn-primary btn-sm btn-rounded float-end mt-4 ms-2" onclick="printDiv('print-div')"><i class="mdi mdi-printer-outline me-1"></i>Print</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
<script>
    var qrcode = new QRCode(document.getElementById("qrcode"), {
        width: 120,
        height: 120
    });
    qrcode.makeCode("<?= $siswa['nama'] ?> - LUNAS");

    function printDiv(divId) {
        var printContents = document.querySelector('.' + divId).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
        location.reload();
    }
</script>
<style>
    @media print {
        body * {
            display: none;
        }

        .card-body,
        .card-body * {
            display: block;
        }

        @page {
            margin: 0;
        }
    }
</style>
<?= $this->endSection() ?>