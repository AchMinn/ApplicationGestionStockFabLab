<?php 
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$b = getimagesize($_FILES["userImage"]["tmp_name"]);
	$username = mysqli_real_escape_string($db,$_POST['usernamereg']);
	$password = mysqli_real_escape_string($db,$_POST['passwordreg']);
	//Verify if the user uploaded the image
		if($b !== false){
	//Get the content of the image
			$file = $_FILES['userImage']['tmp_name'];
			$image = addslashes(file_get_contents($file));

			$sql = ("INSERT INTO `Operateur`(`image`, `username`, `mot_de_passe`) VALUES ('$image','$usernamereg','$passwordreg'");
			$result = mysqli_query($db,$sql);
			if ($result) {
				echo "<script type='text/javascript'>alert('User Registered Succesfully');window.location.href='index.php';</script>"
			}else {
				echo "<script type='text/javascript'>alert('Failed to upload the image');window.location.href='index.php';</script>"
			}

 ?>
