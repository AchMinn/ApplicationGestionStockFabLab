<?php 

include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$status = $statusMsg = '';
	if(!empty($_FILES["image"]["name"])) { 
		// Get file info 
		$fileName = basename($_FILES["image"]["name"]); 
		$fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
		// Allow certain file formats 
		$allowTypes = array('jpg','png','jpeg','gif'); 
		if(in_array($fileType, $allowTypes)){ 
			$image = $_FILES['image']['tmp_name']; 
			$imgContent = addslashes(file_get_contents($image));
			$username = mysqli_real_escape_string($db,$_POST['usernamereg']);
			$password = mysqli_real_escape_string($db,$_POST['passwordreg']);
// Insert image content into database
			$insert = $db->query("INSERT INTO Operateur (image,username,mot_de_passe) VALUES ('$imgContent','$username','$password'");
				if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 

echo "<script type='text/javascript'>alert('$statusMsg');window.location.href='index.php';</script>"


 ?>
