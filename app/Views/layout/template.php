<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="/css/style.css">

  <title><?= $title; ?></title>
</head>

<body>

  <?= $this->include('layout/navbar'); ?>

  <?= $this->renderSection('content'); ?>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

<!-- Footer -->
<footer class="d-flex flex-column text-center text-lg-start bg-dark text-muted">

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5 p-4">
      <!-- Grid row -->
      <div class="row mt-3">


        <!-- Grid column -->
        <div class="col-md-4 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Layanan RADNExT
          </h6>
          <p>
            <a href="#!" class="text-reset text-decoration-none">Akses Nirkabel Broadband</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-decoration-none">Koneksi Internet untuk Koperasi</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-decoration-none">Jaringan Privat Virtual (VPN)</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Indocenter
          </h6>
          <p>
            <a href="#!" class="text-reset text-decoration-none">Hosting Web dan e-Mail</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-decoration-none">Domain .ID</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-decoration-none">Layanan VPS</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-decoration-none">Layanan SSL</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-decoration-none">Layanan Colocation</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            PT. RADNET DIGITAL INDONESIA
          </h6>
          <p>Plaza BRI suite 803, Jl. Basuki Rahmat No.112, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60271</p>
          <p>+62 31-5320170</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <hr style="border-top:2px solid #fff; margin:0;">
  <p class="p-4">© 2021 Copyright: RADNExT</p>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</html>