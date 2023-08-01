<?php 
session_start();
if(isset($_SESSION['username']))
 {
     
 }else{
  session_destroy();
  echo "<script>alert('Insufficient Permissions');window.location.href='../Indexes/index.php';</script>";
 }
     
?>
