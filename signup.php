<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Form Regristasi Mahasiswa</title>
        <link rel="stylesheet" type="text/css" href="css/login2.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="header">INPUT MAHASISWA</div>
        <div class="wrapper">
            <div class="title">Regristasi</div>
            <form action="" method=post>
                <div class="field">
                   <input type="text" name="emailmhs" placeholder="Masukkan Email" required>
                    
                </div>
                <div class="field">
                   <input type="password"  name="passwordmhs" placeholder="Masukkan Password" required>
                    
                </div>
                <div class="field">
                   <input type="text" name="usernamemhs" placeholder="User Name" required>
                    
                </div>
                <div class="field">
                   <input type="text" name="nim" placeholder="NIM" required>
                    
                </div>
                <div class="field">
                   <input type="text" name="namamhs" placeholder="Nama Mahasiswa" required>
                    
                </div>
                <div class="content">
                    <input type="checkbox" id="ingatkan saya">
                    <label for="ingatkan saya">Ingatkan saya</label>
                </div>

                <div class="field">
                    <input type="submit" name="submit" value="Sign Up">
                </div>
                <div class="signup-link">
                    Daftar sebagai dosen? <a href="signupdosen.php">Disini</a>
                </div>
            </form> 
            <?php
                     include "koneksi.php";
                     if(isset($_POST['submit'])){
                        mysqli_query($conn,"insert into mahasiswa set usernamemhs= '$_POST[usernamemhs]',
                         emailmhs= '$_POST[emailmhs]',
                         passwordmhs= '$_POST[passwordmhs]',
                         nim= '$_POST[nim]',
                         namamhs= '$_POST[namamhs]'");
                         echo "<script type='text/javascript'>alert('Register_Berhasil');
                         window.location='loginmhs.php';
                         </script>";
                    
                     }
                       
                    
                ?>
                
        </div>
    </body>
</html>