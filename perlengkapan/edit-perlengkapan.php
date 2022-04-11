<?php 
  include '../koneksi.php';
  $id = $_GET['id_perlengkapan'];

  if(!isset($_GET['id_perlengkapan'])) {
    echo "
      <script>
        alert('Tidak Ada ID Terdeteksi');
        window.location.href = 'perlengkapan.php';
      </script>
    ";
  }

  function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
      $rows = $row;
    }
    return $rows;
  }

  $perlengkapan = query("SELECT * FROM tb_perlengkapan WHERE id_perlengkapan = $id");

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
    <link rel="stylesheet" href="../style/style.css" />

    <title>Edit Perlengkapan</title>
  </head>
  <body>
    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#"
          ><img src="../img/flower.png" alt="" /> GardenQ</a
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
            <a class="nav-link" aria-current="page" href="../admin.html"
              >Home</a
            >
            <a class="nav-link" href="../jenis-tanaman/jenis-tanaman.php">Jenis Tanaman</a>
            <a href="perlengkapan.php" class="nav-link">Perlengkapan</a>
            <a class="nav-link" href="../logout.html">Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Awal Form -->
    <section class="form">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center mt-3">Edit Perlengkapan</h2>
            <hr />
          </div>
        </div>

        <div class="row">
          <div class="col-md-10 offset-1">
            <form action="perlengkapan-proses.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $perlengkapan['id_perlengkapan']; ?>">
            <input type="hidden" name="gambarLama" value="<?= $perlengkapan['gambar']; ?>">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input
                  type="text"
                  name="nama"
                  id="nama"
                  class="form-control"
                  placeholder="Masukkan Nama Perlengkapan"
                  value="<?= $perlengkapan['nama_perlengkapan']; ?>"
                />
              </div>
              <div class="form-group">
               <label for="deskripsi">Deskripsi</label>
               <textarea class="form-control" placeholder="Masukkan Deskripsi Tanaman" id="floatingTextarea" name="deskripsi"><?= $perlengkapan['deskripsi']; ?></textarea>
              <div class="form-group">
                <label for="harga">Harga</label>
                <input
                  type="text"
                  name="harga"
                  id="harga"
                  class="form-control"
                  placeholder="Masukkan Harga"
                  value="<?= $perlengkapan['harga'] ?>"
                />
              </div>
              <div class="form-group">
                <label for="gambar">Gambar</label>
                <br>
                <img src="../image/<?= $perlengkapan['gambar']; ?>" alt="" width="50%">
                <input type="file" class="form-control" name="gambar" id="gambar">
              </div>
              <button type="submit" class="btn" name="edit">Edit</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Form -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
