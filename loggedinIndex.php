<?php 
session_start();
var_dump($_SESSION);
include("config.php");
// $res = $db->query('SELECT image_Machine,status,Nom_de_la_machine FROM Machines');


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Logged in Main Page</title>
</head>
<body>
	<?php include('loggedinheader.php') ?>

</body>
</html>
