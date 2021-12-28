<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  <!-- CSS Awesome Icon -->
  <link rel="stylesheet" href="fowsome/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">

 <!-- My CSS -->
  <link rel="stylesheet" href="style.css">
  <title>ASSCOM</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#home">ASSCOM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#layanan">layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#About">about</a>
          </li> 
        </ul>
       
      </div>
      <div class="collapse navbar-collapse text-right" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="login.php">login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup.php">sign in</a>
          </li>
        </ul>
       
      </div>
    </div>
  </nav>
  <div class="container-fluid banner">
      <div class="container text-center text-dark">
        <h3 class="display-1">Selamat Datang di Website Pengumpulan Tugas for Mahasiswa</h3>
        <h4 class="display-1">Selamat Belajar</h4>
        <h1 class="display-6">untuk lebih lanjut silahkan pilih menu dibawah ini</h1>
        
        <div class="btn-group" role="group" aria-label="Basic checkbox    toggle button group">
          <a href="login.php">
            <button type="button" class="btn btn-primary btn-lg">User</button>
          </a>
          <a href="loginmhs.php">
            <button type="button" class="btn btn-secondary btn-lg">Mahasiswa</button>
          </a>
        </div>
      </div>
    </div>
  <div class="container-fluid layanan pt-5 pb-5">
    <div class="container text-center">
      <h2 class="display-3" id="layanan">Layanan</h2>
    </div>
    <div class="row">
      <div class="col text-center">
        <div class="card">
          <img src="gambar/4.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
          <a href="login.php">
            <button type="button" class="btn btn-primary btn-lg">Menu User</button>
          </a>
            <h4 class="card-text text">layanan yang di berikan antara lain:</h5>
            <h5 class="card-text text">"tempat mebuat tugas kepada mahasiswa"</h5>
            <h5 class="card-text text">"melihat mahasiswa yang sudah mengerjakan"</h5>
          </div>
        </div>
      </div>
      <div class="col text-center">
        <div class="card">
          <img src="gambar/5.jpeg" class="card-img-top" alt="card image cap">
          <div class="card-body">
            <a href="loginmhs.php">
              <button type="button" class="btn btn-primary btn-lg">Menu Mahasiswa</button>
            </a>
              <h4 class="card-text text">layanan yang di berikan antara lain:</h5>
              <h5 class="card-text text">"Tempat Assignmen dan list daftar_pengerjaan"</h5>
              <h5 class="card-text text">"Menyediakan Tempat Uplod File"</h5>
            </div>
        </div>
      </div>
      
    </div>
  </div>

  <div class="container" >
        <div class="row p-2 mt-3 mb-3">
        <h2 style="text-align: center" id="About"> ABOUT US </h2> 
        </div>
        <div class="row justify-content-around">
          <div class="col pb-3">
            <img src="gambar/3.png" alt="gambar" style="width: 700px;">
          </div>
          <div class="col pt-3">
            <p>Asscom dapat membantu mahasiswa dalam pengumpulan tugas secara online 
            selain itu pada aplikasi ini mahasiswa dapat melihat kumpulan tugas yang akan mereka kerjakan
          beserta time line pengumpulan tugas.</p>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506224.55271782115!2d111.89089275307742!3d-7.588112435416525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780990cca5ca17%3A0x6597ebee8369d8a0!2sREAT!5e0!3m2!1sid!2sid!4v1639232703613!5m2!1sid!2sid" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  <br>
  <a href="https://www.facebook.com/iqbal.hariosyahputra/"> <i class="fab fa-facebook-square fa-3x"></i></a>
  <a href="https://wa.me/628814998151"><i class="fab fa-whatsapp-square fa-3x"></i></a>
  <a href="https://www.instagram.com/iqbal_hario16/"><i class="fab fa-instagram-square fa-3x"></i></a>
          </div>
        </div>
      </div>

      <!-- Footer -->
    <footer class="bg-light bg-dark text-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center text-ligh p-3" style=" bg-dark">
            © 2020 Copyright:
            <a class="text-light">Kelompok 1</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Akhir Footer -->

    

  </div>


  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>
</html>