<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $nim = mysqli_real_escape_string($conn, $_POST['nim']);
   $pass = mysqli_real_escape_string($conn, $_POST['password']);

   $select = mysqli_query($conn, "SELECT * FROM `mahasiswa` WHERE nim = '$nim' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['nim'];
      header('location:user.php');
   }else{
      $message[] = 'incorrect password or email!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login | USU Students</title>

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
      <h3>login now <i class="bi bi-box-arrow-in-right"></i></h3>
      <input type="text" name="nim" required placeholder="enter nim" class="box">
      <input type="password" name="password" required placeholder="enter password" class="box">
      <input type="submit" name="submit" class="btn" value="Login Now">
      <p>don't have an account? <a href="register.php">register now</a></p>
   </form>

</div>

</body>
</html>
