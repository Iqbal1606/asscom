<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Form Regristasi User</title>
        <link rel="stylesheet" type="text/css" href="css/login2.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="header">INPUT USER/Penanggung Jawab Kelas</div>
        <div class="wrapper">
            <div class="title">Regristasi</div>
            <form action="" method="post">
                <div class= "field" >
                   <input type="text" name="emailuser" placeholder="Masukkan Email" required>
                    
                </div>
                <div class="field">
                   <input type="text" name="passworduser" placeholder="Masukkan Password" required>
                    
                </div>
                <div class="field">
                   <input type="text" name="namauser"  placeholder="Nama User" required>
                    
                </div>
                <div class="field">
                    <input type="text" name="kodeakses" placeholder="Buat Kode Akses" required>
                     
                 </div>
 

                <div class="field">
                        <input type="submit" value="submit" name="submit">
                    
                </div>
                <?php
                     include "koneksi.php";
                     if(isset($_POST['submit'])){
                        mysqli_query($conn,"insert into user set kodeakses= '$_POST[kodeakses]',
                         emailuser= '$_POST[emailuser]',
                         passworduser= '$_POST[passworduser]',
                         namauser= '$_POST[namauser]'");
                         echo "<script type='text/javascript'>alert('Register_Berhasil');
                         window.location='login.php';
                         </script>";
                    
                     }
                       
                    
                ?>
               
            </form> 
                
                
        </div>
    </body>
</html>