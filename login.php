<?php
    session_start();
 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Form Login User</title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>ASSCOM</h1>
        <h2>Assignment Coming</h2>
        <div class="wrapper">
            <div class="title">Login User</div>
            <form method= "post">
                <div class="field">
                   <input type="text" name="kodeakses" placeholder="Masukkan kode akses" required>
                    
                </div>
                <div class="field">
                   <input type="password" name="passworduser" placeholder="Masukkan Password" required>
                    
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
                    apakah sudah punya akun mahasiswa? <a href="loginmhs.php">login mahasiwa</a>
                </div>
                <div class="signup-link">
                    Tidak punya akun? <a href="signup.php">Daftar Dulu</a>
                </div>
                
                
            </form> 
                <?php
                if (isset($_POST['login'])) {
                    include "koneksi.php";
                    $kodeakses = $_POST['kodeakses'];
                    $password    = $_POST['passworduser'];
                    //var_dump($_POST);
                    //return false;
                    $cek_user = mysqli_query($conn, "SELECT * FROM user WHERE kodeakses='$kodeakses'");
                    
                    $row      = mysqli_num_rows($cek_user);

                    if ($row == 1) {
                        $fetch_pass = mysqli_fetch_assoc($cek_user);
                        //var_dump($fetch_pass);
                        //return false;
                        $cek_pass = $fetch_pass['passworduser'];
                        if ($cek_pass != $password) {
                            echo "<script>alert('password salah');</script>";
                        } else {
                            $_SESSION['log'] = true;
                            echo "<script>alert('login Berhasil');document.location.href='user.php';</script>";
                        }
                    } else {
                    
                        echo "<script>alert('user name salah/belum terdaftar');</script>";
                    }
                }
                ?>
        </div>
    </body>
</html>