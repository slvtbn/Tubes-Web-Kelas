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

    <title>Login</title>
  </head>
  <body>
    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
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
            <a class="nav-link" aria-current="page" href="home.php"
              >Home</a
            >
            <a class="nav-link" href="about.html">About</a>
            <a class="nav-link" href="#">Login</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Awal Form -->
    <section class="form" id="login">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center mt-3">Login Form</h2>
            <p class="text-center">Masukkan Username dan Password</p>
            <hr />
          </div>
        </div>

        <div class="row">
          <div class="col-md-10 offset-1">
            <form action="login-proses.php" method="post">
              <div class="form-group">
                <label for="username">Username</label>
                <input
                  type="text"
                  name="username"
                  id="username"
                  class="form-control"
                  placeholder="Masukkan Username"
                />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  name="password"
                  id="password"
                  class="form-control"
                  placeholder="Masukkan Password"
                />
              </div>
               <a href=""><button type="submit" class="btn" name="login">Login</button></a>
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
