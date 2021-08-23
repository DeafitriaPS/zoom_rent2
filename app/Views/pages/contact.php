<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container py-4">
    <div class="row py-4">
        <div class="card rounded-5 mt-4 mb-4">
            <div class="card-body">

                <div class="d-flex bd-highlight py-2">
                    <div class="p-5 flex-fill bd-highlight">
                        <h1 class="text-primary">Kontak Kami</h1>
                        <h4 class="text-primary">PT. Radnet Digital Indonesia</h4>
                        <h5>Plaza BRI Suite 803, Jl. Basuki Rahmat No. 122, <br /> Embong Kaliasin, Kec, Genteng, <br /> Kota Surabaya, <br />Jawa Timur 60271</h5>
                    </div>
                    <div class="row g-3 py-5">

                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Nama" aria-label="Nama">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="Email" aria-label="Email">
                        </div>
                        <div class="col-12">
                            <!-- <input type="textarea" class="form-control form-control-lg" placeholder="Pesan" aria-label="Pesan"> -->
                            <textarea class="form-control" placeholder="Pesan" aria-label="Pesan" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary" type="button">Kirim</button>
                </div>
            </div>
        </div>

    </div>
</div>
<?= $this->endSection(); ?>