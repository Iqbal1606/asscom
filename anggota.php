<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'asscom'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());
}

// query mengambil semua data tugas
$sql_data_tugas = 'SELECT * FROM tugas';
$query_data_tugas = mysqli_query($conn, $sql_data_tugas);

if (!$query_data_tugas) {
    die('SQL Error: ' . mysqli_error($conn));
}

if (isset($_GET['id_del'])) {
    $id_tugas   = $_GET['id_del'];
    $sql_delete_tugas="DELETE from tugas where id_tugas='$id_tugas'";

    $query_delete_tugas = mysqli_query($conn, $sql_delete_tugas);
    if (!$query_delete_tugas) {
        die('SQL Error: ' . mysqli_error($conn));
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

    <title> Menu Anggota </title>
  </head>
  <body>
    <body style="background-image: url('2.jpeg');"></body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <div class="container-fluid ml-4">
          <marquee direction="left"> <h4>SELAMAT DATANG DI MENU USER</h4></marquee>
            <div class="icon ml-4">
                <h5>
                    <a href="index.php"> <i class="fas fa-sign-out-alt me-3 data-bs-toggle="tooltip" title="sign-out"></i></a>
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
                <li class="nav-item">
                  <a class="nav-link text-white" href="daftar_list_tugas.php"><i class="fas fa-newspaper me-2"></i>List Tugas Mahasiswa</a><hr class="bg-secondary">
                </li>

              </ul>
          </div>
          <class class="col-md-10 p-2 pt-4">
              <h3><i class="fas fa-users me-2"></i>ANGGOTA</h3><hr class="bg-dark">
              <h5>DAFTAR ANGGOTA TERDAFTAR:</h5>
              <table class="table table-striped">
                <tr>
                  <th>NO</th>
                  <th>NAMA TUGAS</th>
                  <th>NAMA MATKUL</th>
                  <th>DESKRIPSI</th>
                  <th>DEADLINE</th>
                  <th>folder</th>
                  <th>Update</th>
                </tr>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($query_data_tugas)) {
                    ?>
                          <tr>
                              <th><?php echo $no++ ?></th>
                              <th><?php echo $data['nama_tugas'] ?></th>
                              <th><?php echo $data['nama_matkul'] ?></th>
                              <th><?php echo $data['deskripsi'] ?></th>
                              <th><?php echo $data['deadline'] ?></th>
                              <th><?php echo $data['folder'] ?></th>
                              <th>
                                <a href='anggota.php?id_del=<?php echo $data['id_tugas'] ?>'>
                                  Delete
                                </a>
                              </th>
                          </tr>
              <?php
                } ?>

              </table>



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