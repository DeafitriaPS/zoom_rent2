<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Carousel -->
<!-- <div class="container">
  <div class="row">
    <div class="col"> -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/A1.jpg" class="d-block w-100" height="400" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/A2.png" class="d-block w-100" height="400" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/A3.jpg" class="d-block w-100" height="400" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

</div>
<!-- </div>
  </div>
</div> -->
<!-- End Carousel -->

<!-- Zoom Pricing -->
<div class="pricing">
  <h1 class="text-center fw-bold mt-4">Paket Zoom Meeting</h1>
  <h5 class="text-center" color="#016FF9">Pilih paket sesuai kebutuhan Anda</h5>
</div>
<div class="line"></div>

<div class="background">
  <div class="pricing-container">
    <div class="panel pricing-table">

      <div class="pricing-plan">
        <div class="pricing-header">
          <h6 class="pricing-tag">Pro</h6>
          <h5>UC Zoom Pro</h5>
          <h2 class="pricing-type">100</h2>
        </div>
        <ul class="pricing-features">
          <li class="pricing-features-item">Host up to 100 participants</li>
          <li class="pricing-features-item">Group meetings</li>
          <li class="pricing-features-item">Social media streaming</li>
          <li class="pricing-features-item">Private & Group Chat</li>
        </ul>
        <span class="pricing-price">Rp 1.234.567</span>
        <p class="pricing-detail">*Harga sudah termasuk PPN 10%</p>
        <a href="/pages/formpesan" class="pricing-button">Pesan Sekarang</a>
      </div>

      <div class="pricing-plan">
        <div class="pricing-header">
          <h6 class="pricing-tag">Business</h6>
          <h5>UC Zoom Business</h5>
          <h2 class="pricing-type">300</h2>
        </div>
        <ul class="pricing-features">
          <li class="pricing-features-item">Host up to 300 participants</li>
          <li class="pricing-features-item">Single sign-on</li>
          <li class="pricing-features-item">Recording transcript</li>
          <li class="pricing-features-item">Private & Group Chat</li>
        </ul>
        <span class="pricing-price">*Call for price</span>
        <p class="pricing-detail">.</p>
        <a href="https://api.whatsapp.com/send?phone=628978187784&text=Hallo%20Agan%20Baik" class="pricing-button">Pesan Sekarang</a>
      </div>


      <div class="pricing-plan">
        <div class="pricing-header">
          <h6 class="pricing-tag">Enterprise</h6>
          <h5>UC Zoom Enterprise</h5>
          <h2 class="pricing-type">500</h2>
        </div>
        <ul class="pricing-features">
          <li class="pricing-features-item">Host up to 500 participants</li>
          <li class="pricing-features-item">Unlimited cloud storage</li>
          <li class="pricing-features-item">Recording transcripts</li>
          <li class="pricing-features-item">.</li>
        </ul>
        <span class="pricing-price">*Call for price</span>
        <p class="pricing-detail">.</p>
        <a href="https://api.whatsapp.com/send?phone=628978187784&text=Hallo%20Agan%20Baik" class="pricing-button">Pesan Sekarang</a>
      </div>

      <div class="pricing-plan">
        <div class="pricing-header">
          <h6 class="pricing-tag">Enterprise Plus</h6>
          <h5>UC Zoom Enterprise</h5>
          <h2 class="pricing-type">1000</h2>
        </div>
        <ul class="pricing-features">
          <li class="pricing-features-item">Host up to 1000 participants</li>
          <li class="pricing-features-item">Unlimited cloud storage</li>
          <li class="pricing-features-item">Recording transcripts</li>
          <li class="pricing-features-item">.</li>
        </ul>
        <span class="pricing-price">*Call for price</span>
        <p class="pricing-detail">.</p>
        <a href="https://api.whatsapp.com/send?phone=628978187784&text=Hallo%20Agan%20Baik" class="pricing-button">Pesan Sekarang</a>
      </div>

    </div>
  </div>
</div>
<!-- End Zoom Pricing -->
<?= $this->endSection(); ?>