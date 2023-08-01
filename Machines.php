<?php 
include('mainpages.php')


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Les Machines</title>
	<link rel="stylesheet" href="Operateur.css">
	<link rel="stylesheet" href="../Indexes/index.css">
</head>
<body>
  <?php include('../Indexes/loggedinheader.php') ?>
<script>
function openForm() {
  document.getElementById("login").style.display = "block";
  document.getElementById("form").style.display = "block";
}

function closeForm() {
  document.getElementById("login").style.display = "none";
  document.getElementById("form").style.display = "none";
}
</script>
</body>
</html>
