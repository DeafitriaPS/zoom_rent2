<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 py-3">
            <div class="card">
                <div class="card-header bg-success text-light text-center">
                    <h4>Selamat !</h4> Anda Berhasil Melakukan Pembelian Paket Zoom
                </div>
                <div class="card-body text-center">
                    <div class="alert alert-danger mt-0"><strong>Peringatan</strong>, Jangan reload halaman pembayaran ini. secara otomatis akan diarahkan ke halaman utama.</div>
                    <h5 class="card-title">123123123</h5>
                    <h6 class="card-subtitle mb-2 text-muted">A/N PT.Radnet Digital Indonesia</h6>
                    <p class="card-text">Mandiri Syariah</p>
                    <p class="lead">Total Pembayaran Rp<strong>123.123</strong></p>
                    <p class="lead">Kode Pembayaran <strong><?php echo ($kode) ? $kode : ''; ?></strong></p>
                    <p>Jika sudah melakukan transfer, segera<br> mengunggah bukti transfer</p>
                    <p>
                    <div class="row justify-content-center">
                        <form method="post" id="upload_form">
                            <input class="form-control w-50 m-auto" type="file" name="images[]" id="select_image" accept="image/*" />
                        </form>
                    </div>
                    <!-- </div> -->
                    </p>
                    <p><img src="gambar/" id="preview" class="img-thumbnail"></p>
                    <p><button type="submit" name="btn_simpan" class="btn btn-success">Kirim</button></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>