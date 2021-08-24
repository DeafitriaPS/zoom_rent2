<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>
<div class="container-fluid overflow-scroll">
    <?php if (!empty(session()->getFlashdata('pesan'))) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0"><?= $title; ?></h3>
        <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="<?= base_url('/pemilik/print_laporan_bulanan'); ?>" target="_blank"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Print Laporan</a>
    </div>

    <!-- Tabel -->

    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">Data Pesanan</p>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama </th>
                            <th>Email</th>
                            <th>Nominal</th>
                            <th>Jenis Paket</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <button class="btn btn-primary btn-sm d-none d-sm-inline-block" data-toggle="modal" data-target="#modalKonfirm">Konfirmasi</button>
                                <button class="btn btn-success btn-sm d-none d-sm-inline-block" data-toggle="modal" data-target="#modalKonfirm">Detail</button>
                            </td>
                        </tr>

                        <!-- Modal Konfirmasi -->
                        <div class="modal fade mt-5 pt-5" id="modalKonfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Transaksi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="" method="post">
                                        <div class="modal-body">
                                            <p>Apakah benar anda ingin menghapus data ini?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                            <button type="submit" name="submit" class="btn btn-primary">Konfirmasi</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Modal -->

                        <!-- Modal -->
                        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Transaksi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="" method="post">
                                        <div class="modal-body">
                                            <div class="form-group"><label for="productname"><strong>Keterangan</strong></label>
                                                <input class="form-control" type="text" value="" name="nama_transaksi" required>
                                            </div>

                                            <div class="form-group"><label for="productname"><strong>Nominal</strong></label>
                                                <input class="form-control" type="text" value="" name="nominal" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Modal -->

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- batas tabel -->

</div>
<?= $this->endSection(); ?>