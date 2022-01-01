<?php
date_default_timezone_set("Asia/Jakarta");
    session_start();
    if (!isset($_SESSION['log'])){
        header("Location: ../loginmhs.php");
        exit;
    }
?>
<?php
include "../koneksi.php";
$sql = "SELECT * FROM tugas";

$query = mysqli_query($conn, $sql);

if (!$query) {
    die('SQL Error: ' . mysqli_error($conn));
}
//parameter 
$data_tugas = "";

if (isset($_GET['tugas_id'])) {
    $id_tugas = $_GET['tugas_id'];
    $sql_tugas = "SELECT * FROM tugas WHERE id_tugas='$id_tugas'";
    $query_tugas = mysqli_query($conn, $sql_tugas);

    $data_tugas = mysqli_fetch_assoc($query_tugas);
}
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="user.css">
    <link rel="stylesheet" href="../fowsome/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">

    <title>user</title>
  </head>
  <body>
    <body style="background-image: url('../2.jpeg');"></body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <div class="container-fluid ml-4">
          <marquee direction="left"> <h4>SELAMAT DATANG DI MENU MAHASISWA</h4></marquee>
            <div class="icon ml-4">
                <h5>
                    <a href="../logout.php" onclick="return confirm('yakin mau logout')"> <i class="fas fa-sign-out-alt me-3 data-bs-toggle="tooltip" title="sign-out"></i></a>
                </h5>
            </div>
          </div>
        </div>
      </nav>
      <class class="row no-gutters mt-5 fixed-top">
          <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="mahasiswa.php"> <i class="fas fa-user me-2"></i>Profil</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="assignment.php"><i class="fas fa-paperclip me-2"></i>assignment</a><hr class="bg-secondary">
                </li>
              </ul>
          </div>
          <class class="col-md-10 p-2 pt-4">
              <h3><i class="fas fa-user me-2"></i>PROFIL</h3><hr class="bg-dark">
              <div class="col-md-10 p-5 pt-4">
                  <div class="col-10 md-5 pt-4">
                        <div class="row text-center">
                          <div class="col-20 text-center ">
                            <div class="card">
                              <div class="mb-3">
                                <form method="get">
                                <label for="disabledSelect" class="form-label">Silahkan pilih tugas anda</label>
                                <select id="disabledSelect" name="tugas_id" class="form-select" required>
                                  <option value="">Memilih Tugas</option>
                                    <?php
                                      while ($data = mysqli_fetch_array($query)) {
                                          ?>
                                                <option value="<?php echo $data['id_tugas'] ?>"><?php echo $data['nama_tugas'] ?></option>

                                    <?php
                                      } ?>

                                </select>
                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                              </div>

                            </div>
                          </div>
                        </div>

                        <?php if ($data_tugas != ""): ?>
                          <div class="card-body bg-warning">
                            <table class="table table-striped">
                              <tr>
                                <td>Id Tugas = <?=$data_tugas['id_tugas']?></td>
                              </tr>
                              <tr>
                                <td>Nama_Tugas  = <?=$data_tugas['nama_tugas']?></td>
                              </tr>
                              <tr>
                                <td>Nama Matkul = <?=$data_tugas['nama_matkul']?> </td>
                              </tr>
                              <tr>
                                <td>Deskripsi   = <?=$data_tugas['deskripsi']?></td>
                              </tr>
                              <tr>
                                <td>Deadline    = <?=$data_tugas['deadline']?></td>
                              </tr>
                              <tr>
                                <td>Folder      = <a href="/asscom/file/<?=$data_tugas['folder']?>"><?=$data_tugas['folder']?></a></td>
                              </tr>

                            </table>

                          </div>
                          <?php endif; ?>
                  </div>

                  <div class="col-md-12 p-S pt-4">
                    <div class="col-10 md-5 pt-4">
                        <div class="col-20 text-center ">
                            <div class="card">
                                <div class="mb-3">
                                  <h5>Upload Tugas Kamu</h5>
                                  <div>
                                  <h6>Silahkan Upload Tugas Anda</h6>
                                  </div>
                                  <form action="" method="post" enctype="multipart/form-data" >
                                  <input type="hidden" name="id_tugas" value="<?=$_GET['tugas_id']?>">
                                  <input type="hidden" name="tgl_pengumpulan" value="<?=date ('Y-m-d H:i')?>">
                                
                                    <div class="">
                                      <table>
                                     
                                        <tr>
                                          <td width="130">File Upload</td>
                                          <td><input class="form-control" type="file" name="file"></td>
                                        </tr>
                                        <tr>
                                          <td></td>
                                          <td><input type="submit" value="Kirim" name="kirim"></td>
                                        </tr>
                                        <?php
                                        include "../koneksi.php";
                                        if(isset($_POST['kirim'])){
                                          $ekstensi_diperbolehkan	= array('pdf','jpg','docx');
                                          $usernamemhs=$_SESSION['usernamemhs'];
                                         
                                          $nama = $_FILES['file']['name'];
                                          $x = explode('.', $nama);
                                          $ekstensi = strtolower(end($x));
                                          $ukuran	= $_FILES['file']['size'];
                                          $file_tmp = $_FILES['file']['tmp_name'];
                                          if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                                            if($ukuran < 104407000000){			
                                          move_uploaded_file($file_tmp, 'file/'.$nama);
                                          $sql= "INSERT INTO `tugasmhs`( `id_tugas`, `usernamemhs`, `filetgsmhs`, `tanggalpengumpulan`) VALUES 
                                          ('$_POST[id_tugas]','$usernamemhs','$nama','$_POST[tgl_pengumpulan]')";
                                          
                                          $query = mysqli_query($conn,$sql);
                                          
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
                                    </div>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>


                  </div>

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