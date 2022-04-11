<?php 
  include '../koneksi.php';
  function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
    }
    return $rows;
  }

  $perlengkapan = query("SELECT * FROM tb_perlengkapan");
  $no = 1;

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

    <title>Perlengkapan</title>
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
            <a class="nav-link" aria-current="page" href="../admin.php"
              >Home</a
            >
            <a class="nav-link" href="../jenis-tanaman/jenis-tanaman.php" id="jenis">Jenis Tanaman</a>
            <a href="#" class="nav-link"
              >Perlengkapan</a
            >
            <a class="nav-link" href="../logout.php">Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Awal Isi -->
    <div class="isi">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Perlengkapan</h2>
            <hr />
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <a href="tambah-perlengkapan.php"
              ><button class="btn">Tambah Data</button></a
            >
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <table class="table table-striped table-bordered">
              <thead class="text-center">
                <tr>
                  <th width="2%">No</th>
                  <th width="30%">Gambar</th>
                  <th width="15%">Perlengkapan</th>
                  <th>Deskripsi</th>
                  <th>Harga</th>
                  <th width="15%">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($perlengkapan as $row) : ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td>
                    <img src="../image/<?= $row['gambar']; ?>" alt="" class="gambar"/>
                  </td>
                  <td><?= $row['nama_perlengkapan']; ?></td>
                  <td><?= $row['deskripsi']; ?></td>
                  <td><?= $row['harga'] ?></td>
                  <td>
                    <a
                      href="edit-perlengkapan.php?id_perlengkapan=<?= $row['id_perlengkapan']; ?>"
                      ><button class="btn">Edit</button></a
                    >
                    <a
                      href="hapus-perlengkapan.php?id_perlengkapan=<?= $row['id_perlengkapan']; ?>"
                      ><button class="btn">Hapus</button></a
                    >
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Isi -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>

    <script src="../script/lightbox.js"></script>
  </body>
</html>
