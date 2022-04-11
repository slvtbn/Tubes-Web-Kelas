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

    <style>
      .form {
        margin-top: 10%;
        height: 200px;
        text-align: center;
      }
    </style>

    <title>Hapus Jenis Tanaman</title>
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
            <a class="nav-link" href="jenis-tanaman.php">Jenis Tanaman</a>
            <a href="../perlengkapan/perlengkapan.php" class="nav-link"
              >Perlengkapan</a
            >
            <a class="nav-link" href="../logout.php">Logout</a>
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
            <h2 class="text-center mt-3">Hapus Jenis Tanaman</h2>
            <hr />
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <h4>Yakin Ingin Menghapus Data Ini ?</h4>
            <form action="jenis-tanaman-proses.php" method="post">
              <input type="hidden" name="id" value="<?= $_GET['id_tanaman']; ?>" />
              <center>
                <table>
                  <tr>
                    <td>
                      <button class="btn" name="hapus">Ya</button>
                    </td>
                    <td>
                      <button class="btn ms-3" name="tidak">Tidak</button>
                    </td>
                  </tr>
                </table>
              </center>
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
