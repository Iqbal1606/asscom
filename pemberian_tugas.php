<?php
    session_start();
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

    <title>Pemberian_tugas</title>
  </head>
  <body>
    <body style="background-image: url('2.jpeg');"></body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <div class="container-fluid ml-4">
          <marquee direction="left"> <h4>SELAMAT DATANG DI MENU USER</h4></marquee>
            <div class="icon ml-4">
                <h5>
                    <a href="logout.php"> <i class="fas fa-sign-out-alt me-3 data-bs-toggle="tooltip" title="sign-out"></i></a> 
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
          <class class="col-md-10 p-2 pt-4 ">
              <h3>
                  <i class="fas fa-newspaper me-2"></i>Pemberian_tugas</h3><hr class="bg-dark">
              </h3>
              <h4>silahkan mengisikan tugas</h4>
              <form action="" method="post" enctype="multipart/form-data" >

              <div class="">
              <table>
                      <tr>
                          <td width="130">1. ID TUGAS</td>
                          <td><input type="text" name="id_tugas"></td>
                      </tr>

                      <tr>
                          <td width="130">2. NAMA_TUGAS</td>
                          <td><input type="text" name="nama_tugas"></td>
                      </tr>

                      <tr>
                          <td width="130">3. NAMA_MATKUL</td>
                          <td><input type="text" name="nama_matkul"></td>
                      </tr>

                      <tr>
                          <td width="200">4. DESKRIPSI </td>
                          <td><input type="text" name="deskripsi"></td>
                      </tr>
                     
                      <tr>
                            <td width="130">5. Deadline</td>
                            <td><input type="date" name="deadline"></td>
                      </tr>

                      <tr>
                            <td width="130">5. File Upload</td>
                            <td><input type="file" name="file"></td>
                      </tr>

                      <tr>
                          <td></td>
                          <td><input type="submit" value="uplod" name="uplod"></td>
                      </tr>
                  

              </div>
                      <?php
                      include "koneksi.php";
                      if(isset($_POST['uplod'])){
                          $ekstensi_diperbolehkan	= array('pdf','jpg');
                          $nama = $_FILES['file']['name'];
                          $x = explode('.', $nama);
                          $ekstensi = strtolower(end($x));
                          $ukuran	= $_FILES['file']['size'];
                          $file_tmp = $_FILES['file']['tmp_name'];
                          if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                            if($ukuran < 1044070){			
                          move_uploaded_file($file_tmp, 'file/'.$nama);
                          $query = mysqli_query($conn,"INSERT INTO `tugas`(`id_tugas`, `nama_tugas`, `nama_matkul`, `deskripsi`, `deadline`, `folder`) VALUES 
                          ('[$_POST[id_tugas]]','[$_POST[nama_tugas]]','[$_POST[nama_matkul]','[$_POST[deskripsi]]','[$_POST[deskripsi]]','[$nama]')");
                         
                          if($query){
                            
                            echo 'FILE BERHASIL DI SIMPAN';
                          }else{
                            echo 'GAGAL MENGUPLOAD FILE';
                          }
                            }else{
                          echo 'UKURAN FILE TERLALU BESAR';
                            }
                            }else{
                        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
                            }
                      }
                      ?>
                  </table>
              </form>
                        
              

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