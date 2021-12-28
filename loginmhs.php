<?php
    session_start();
 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login Mahasiswa</title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>ASSCOM</h1>
        <h2>Assignment Coming</h2>
        <div class="wrapper">
            <div class="title">Login Mahasiswa</div>
            <form method= "post">
                <div class="field">
                   <input type="text" name="usernamemhs" placeholder="Masukkan User Name" required>
                    
                </div>
                <div class="field">
                   <input type="password" name="passwordmhs" placeholder="Masukkan Password" required>
                    
                </div>
                <div class="content">
                    <input type="checkbox" id="ingatkan saya">
                    <label for="ingatkan saya">Ingatkan saya</label>
                </div>
                <div class="pass-link">
                    <a href="#">Lupa Password</a>
                </div>

                <div class="field">
                    <input type="submit"  name="login" value="Login">
                </div>
                <div class="signup-link">
                    Tidak punya akun? <a href="signup.php">Daftar Dulu</a>
                </div>
            </form> 
<?php
if (isset($_POST['login'])) {
    include "koneksi.php";
    $usernamemhs = $_POST['usernamemhs'];
    $password    = $_POST['passwordmhs'];
    //var_dump($_POST);
    //return false;
    $cek_user = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE usernamemhs='$usernamemhs'");
    
    $row      = mysqli_num_rows($cek_user);

    if ($row == 1) {
        $fetch_pass = mysqli_fetch_assoc($cek_user);
        //var_dump($fetch_pass);
        //return false;
        $cek_pass = $fetch_pass['passwordmhs'];
        if ($cek_pass != $password) {
            echo "<script>alert('password salah');</script>";
        } else {
            $_SESSION['log'] = true;
            echo "<script>alert('login Berhasil');document.location.href='mahasiswa.php';</script>";
        }
    } else {
       
        echo "<script>alert('user name salah/belum terdaftar');</script>";
    }
}
?>
        </div>
    </body>
</html>