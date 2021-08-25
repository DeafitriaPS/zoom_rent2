<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <section>
            <div class="container py-4">
                <form action="<?= base_url('/formpesan/save_formpesan'); ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8 col-lg-8 col-xl-6">
                            <div class="row">
                                <div class="col text-center">
                                    <h1>Form Pemesanan</h1>
                                    <!-- <p class="text-h3">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia.</p> -->
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col mt-4">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
                                </div>
                            </div>
                            <div class="row align-items-center mt-4">
                                <div class="col">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Alamat Email" name="email" required>
                                </div>
                            </div>
                            <div class="row align-items-center mt-4">
                                <div class="col">
                                    <label class="form-label">No. Telp</label>
                                    <input type="text" class="form-control" placeholder="Nomor Telepon" name="telp" required>
                                </div>
                            </div>
                            <div class="row align-items-center mt-4">
                                <div class="col">
                                    <label class="form-label">Instansi</label>
                                    <input type="text" class="form-control" placeholder="Nama Instansi" name="instansi" required>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col mt-4">
                                    <label class="form-label">Alamat</label>
                                    <input type="text" class="form-control" placeholder="Alamat Domisili" name="alamat" required>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col mt-4">
                                    <label class="form-label">Tanggal Peminjaman</label>
                                    <!-- <input type="date" class="form-control" name="tanggalpeminjaman" required> -->
                                    <input type="text" class="form-control date" name="tanggalpeminjaman" required>
                                </div>
                                <script id="rendered-js">
                                    $('.date').datepicker({
                                        multidate: true,
                                        format: 'dd-mm-yyyy',
                                        selectMax: 3
                                    });
                                </script>
                            </div>
                            <div class="mbsc-grid">
                                <div class="mbsc-row">
                                    <div class="mbsc-col-sm-12 mbsc-col-md-4">
                                        <div class="mbsc-form-group">
                                            <div class="mbsc-form-group-title">Max days</div>
                                            <div id="demo-max-days"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block" type="submit">Submit</button>

                            <!-- <div class="row justify-content-start mt-4">
                                <div class="col">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">
                                            I Read and Accept <a href="https://www.froala.com">Terms and Conditions</a>
                                        </label>
                                    </div>

                                    <button class="btn btn-primary mt-4">Submit</button>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
<?= $this->endSection(); ?>