<?php 
  include 'koneksi.php';
  function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
    }
    return $rows;
  }

  $jenis_tanaman = query("SELECT * FROM tb_jenis_tanaman");
  $perlengkapan = query("SELECT * FROM tb_perlengkapan");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />

    <!-- My Style -->
    <link rel="stylesheet" href="style/style.css" />

    <title>Home</title>
  </head>
  <body>
    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"
          ><img src="img/flower.png" alt="" /> GardenQ</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="about.html">About</a>
            <a class="nav-link" href="login.php">Login</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Awal Carousel -->
    <div
      id="carouselExampleControls"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/bg4.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="img/bg6.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="img/bg2.jpg" class="d-block w-100" alt="..." />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Akhir Carousel -->

    <!-- Awal Thumbnail -->
    <section class="thumbnail">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center mt-3 mb-5">Explore Tanaman</h2>
          </div>
        </div>

        <div
          class="
            row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4
            gy-4
            text-center justify-content-center
          "
        >
          <?php foreach($jenis_tanaman as $row) : ?>
            <div class="card">
              <img src="image/<?= $row['gambar_tanaman'] ?>" class="card-img-top gambar" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $row['jenis_tanaman']; ?></h5>
                <p class="card-text">Rp. <?= $row['harga_tanaman']; ?></p>
                <a href="#" class="btn">Beli</a>
                <a href="#" class="btn">Detail</a>
              </div>
            </div>
          <?php endforeach; ?>
          </div>
        </div>
    </section>

     <section class="thumbnail">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center mt-3 mb-5">Explore Perlengkapan</h2>
          </div>
        </div>

        <div
          class="
            row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4
            gy-4
            text-center justify-content-center detail
          "
        >
          <?php foreach($perlengkapan as $row) : ?>
            <div class="card">
              <img src="image/<?= $row['gambar'] ?>" class="card-img-top gambar" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $row['nama_perlengkapan']; ?></h5>
                <p class="card-text">Rp. <?= $row['harga']; ?></p>
                <a href="" class="btn">Beli</a>
                <a href="#" class="btn">Detail</a>
              </div>
            </div>
          <?php endforeach; ?>
          </div>
        </div>
    </section>
    <!-- Akhir Thumbnail -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>

    <script src="script/lightbox.js"></script>
  </body>
</html>
