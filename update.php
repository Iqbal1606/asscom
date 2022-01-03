<?php
    session_start();
    if (!isset($_SESSION['log'])){
        header("Location: login.php");
        exit;
    }
?>
<?php
include 'koneksi.php';
if (isset($_GET['id_update'])) {
$id_tugas   = $_GET['id_update'];
$tugas      = mysqli_query($conn, "SELECT * FROM tugas WHERE id_tugas='$id_tugas'");
$data       = mysqli_fetch_assoc($tugas);
// return var_dump($data['folder']);
// membuat function untuk set aktif radio button
    function active_radio_button($value,$input){
    // apabilan value dari radio sama dengan yang di input
    $result =  $value==$input?'checked':'';
    return $result;
    }
}

if (isset($_POST['uplod'])) {

$id_tugas = $_POST['id_tugas'];
$nama_tugas  = $_POST['nama_tugas'];
$nama_matkul           = $_POST['nama_matkul'];
$deskripsi         = $_POST['deskripsi'];
$deadline       = $_POST['deadline'];
$folder = $data['folder'];
if($_FILES['folder']['name']!=''){
    $ekstensi_diperbolehkan	= array('pdf','jpg','png','docx');
    $nama = $_FILES['folder']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['folder']['size'];
    $file_tmp = $_FILES['folder']['tmp_name'];
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
      if($ukuran < 1044070000000){
          $folder = $nama;
          unlink('file/'.$data['folder']);			
        move_uploaded_file($file_tmp, 'file/'.$nama);
      }
    }
}
// query SQL untuk insert data
$sql_update="UPDATE tugas SET nama_tugas='$nama_tugas',nama_matkul='$nama_matkul',deskripsi='$deskripsi', deadline='$deadline',folder='$folder' where id_tugas='$id_tugas'";
// return var_dump($sql_update);
$query_update = mysqli_query($conn, $sql_update);
// return var_dump($query_update);
    if ($query_update) {
    echo "<script>alert('Data yang anda Update sukses');window.location='daftar_penugasan.php'</script>";
    }
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
                  <a class="nav-link text-white" href="daftar_penugasan.php"><i class="fas fa-users me-2"></i>Daftar Penugasan</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="pemberian_tugas.php"><i class="fas fa-newspaper me-2"></i>Pemberian Tugas</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="daftar_list_tugas.php"><i class="fas fa-newspaper me-2"></i>List Tugas Mahasiswa</a><hr class="bg-secondary">
                </li>

              </ul>
          </div>
          <class class="col-md-10 p-2 pt-4 ">
              <h3>
                  <i class="fas fa-newspaper me-2"></i>Menu Edit Tugas</h3><hr class="bg-dark">
              </h3>
              <h4>Silahkan Ubah Tugas Anda</h4>
            
            <form action="" method="post" enctype="multipart/form-data" bg-warning >
                <input type="hidden" value="<?php echo $data['id_tugas'];?>" name="id_tugas">
                <div class="">
                    <table>
                      <tr>
                          <td width="130">1. NAMA_TUGAS</td>
                          <td><input type="text" name="nama_tugas" value="<?php echo $data['nama_tugas'];?>"></td>
                      </tr>

                      <tr>
                          <td width="130">2. NAMA_MATKUL</td>
                          <td><input type="text" name="nama_matkul" value="<?php echo $data['nama_matkul'];?>"></td>
                      </tr>

                      <tr>
                          <td width="200">3. DESKRIPSI </td>
                          <td><input type="text" name="deskripsi" value="<?php echo $data['deskripsi'];?>"></td>
                      </tr>
                     
                      <tr>
                            <td width="130">4. Deadline</td>
                            <td><input type="date" name="deadline" value="<?php echo $data['deadline'];?>"></td>
                      </tr>
                      <tr>
                            
                            <td width="130">5. File Upload</td>
                            <td><input type="file" name="folder" ></td>
                      </tr>
                      <tr>
                          <td>
                              
                          </td>
                          <td>
                          <a href="file/<?php echo $data['folder'];?>"><?php echo $data['folder'];?></a>
                          </td>
                      </tr>

                      <tr>
                          <td></td>
                          <td><input type="submit" value="uplod" name="uplod"></td>
                      </tr>
                   </table>
                </div>
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