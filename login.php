<?php 
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $username = mysqli_real_escape_string($db,$_POST['username']);
  $password = mysqli_real_escape_string($db,$_POST['password']);

  $sql = "SELECT ID from Operateur where username = '$username' and mot_de_passe = '$password'";
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $active = $row['active'];
  $count = mysqli_num_rows($result);

   if($count == 1) {
         $_SESSION['username'] = $username;
         header("location:loggedinIndex.php");
       }
    elseif ($count != 1) {
      echo "<script type='text/javascript'>alert('Invalid Username or Password');window.location.href='index.php';</script>";
   }
}


 ?>
