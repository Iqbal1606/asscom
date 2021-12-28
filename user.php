<?php
    session_start();
    // return var_dump($_SESSION['log']);
    if (!isset($_SESSION['log'])){
        header("Location: login.php");
        exit;
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="user.css">
    <link rel="stylesheet" href="fowsome/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">

    <title>user</title>
  </head>
  <body>
    <body style="background-image: url('2.jpeg');"></body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <div class="container-fluid ml-4">
          <marquee direction="left"> <h4>SELAMAT DATANG DI MENU USER</h4></marquee>
            <div class="icon ml-4">
                <h5>
                    <a href="logout.php" onclick="return confirm('yakin mau logout')"> <i class="fas fa-sign-out-alt me-3 data-bs-toggle="tooltip" title="sign-out"></i></a> 
                </h5>
            </div>
          </div>
        </div>
      </nav>
      <class class="row no-gutters mt-5 fixed-top">
          <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="user.php"> <i class="fas fa-user me-2"></i>Profil</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="anggota.php"><i class="fas fa-users me-2"></i>Anggota</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="pemberian_tugas.php"><i class="fas fa-newspaper me-2"></i>Pemberian Tugas</a><hr class="bg-secondary">
                </li>
              </ul>
          </div>
          <class class="col-md-10 p-2 pt-4">
              <h3><i class="fas fa-user me-2"></i>PROFIL</h3><hr class="bg-dark">
              
      <div class="row">
        <div class="col text-center">
          <div class="card">
            <i class="fas fa-file-import fa-7x"></i>
            <div class="card-body bg-warning">
              <a href="login.php">
              <button type="button" class="btn btn-primary btn-lg">Uplod Foto Anda</button>
              </a>
              <h4 class="card-text text">layanan yang di berikan pada menu ini antara lain:</h5>
              <h5 class="card-text text">"tempat mebuat tugas kepada mahasiswa"</h5>
              <h5 class="card-text text">"melihat mahasiswa yang sudah mengerjakan"</h5>
              <h5 class="card-text text">"Melihat form pengumpulan"</h5>
            </div>
          </div>
        </div>
      </div>

     
          </class>
      </class>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
   <script type="text/javascript" src="user.js"></script>
  </body>
</html>