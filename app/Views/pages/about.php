<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">

        <div class="card rounded-5 mt-4 mb-4">
            <div class="card-body">

                <div class="d-flex bd-highlight">
                    <div class="p-2 flex-fill bd-highlight">
                        <h1 class="text-primary">Tentang Kami</h1>
                        <h4 class="text-primary mt-5">PT. Radnet Digital Indonesia</h4>
                        <h5>Plaza BRI Suite 803, Jl. Basuki Rahmat No. 122, <br /> Embong Kaliasin, Kec, Genteng, <br /> Kota Surabaya, <br />Jawa Timur 60271</h5>
                    </div>
                    <div class="p-2 flex-fill bd-highlight"><img src="/img/team.jpg" widht="300" height="300"></div>
                </div>
            </div>
        </div>

    </div>
</div>
<?= $this->endSection(); ?>