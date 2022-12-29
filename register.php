<?php

include 'config.php';

if(isset($_POST['submit'])){

    $query = mysqli_query($conn, "INSERT INTO mahasiswa SET
         nim             = '$_POST[nim]',
         nama            = '$_POST[nama]',
         jenis_kelamin   = '$_POST[jk]',
         fakultas        = '$_POST[fak]',
         password        = '$_POST[pass]' ");
 
    $select = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim = '$nim'") or die('query failed');
 
    if(mysqli_num_rows($select) > 0){
        $message[] = 'nim telah terdaftar!';
     }else if ($query) {
          $message[] = 'registered successfully!';
          header('location:s-login.php');
        }
        else {
          $message[] = 'registration failed!';
        }
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style-login.css">

</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Registrasi</h3>
      <input type="text" name="nim" required placeholder="masukkan nim" class="box">
      <input type="text" name="nama" required placeholder="enter nama" class="box">
      <input type="password" name="pass" required placeholder="masukkan password" class="box">
      <input type="radio" name="jk" value="L" required>Laki-laki <br>
      <input type="radio" name="jk" value="P" required>Perempuan
      <input type="text" name="fak" required placeholder="masukkan fakultas" class="box">
      <input type="submit" name="submit" class="btn" value="register now">
      <p>sudah punya akun? <a href="s-login.php">login now</a></p>
   </form>

</div>

</body>
</html>
