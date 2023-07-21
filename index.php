<?php 

include("config.php");
session_start();
// var_dump($_POST);
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $username = mysqli_real_escape_string($db,$_POST['username']);
  $password = mysqli_real_escape_string($db,$_POST['password']);

  $sql = "SELECT ID from Operateur where username = '$username' and mot_de_passe = '$password'";
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $active = $row['active'];
  $count = mysqli_num_rows($result);

   if($count == 1) {
         // session_register("myusername");
         $_SESSION['myusername'] = $username;
         header("location: Operateur.php");
         die();
      }
   }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Main Page</title>
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="index.js">
</head>
<body>
<header role="banner">
  <div class="header__avatar"><a href="index.php" style="text-decoration: none;"><img src="universialogo.png"></a></div>
  <div id="login">
  <div id="form">
    <h2>Welcome</h2>
    <form action="index.php" method="POST">
    <input type="text" placeholder="Username" name="username">
    <input type="password" placeholder="Password" name="password">
    <input type="submit" value="Log in" class="submit" name="sumbit">
    <input type="button" value="Close" class="close" onclick="closeForm()">
    </form>
  </div>
</div>
</header>

<nav role="navigation">
  <ul class="menu__list">
    <li class="menu__item">
      <a href="Operateur.php" style="text-decoration: none;"><button class="menu__link" >Operateur</button></a>
    </li>
    <li class="menu__item">
     <a href="Machines.php" style="text-decoration: none;"><button class="menu__link">Machines</button></a>
    </li>
    <li class="menu__item">
     <a href="Consommateur.php" style="text-decoration: none;"><button class="menu__link">Consommateur</button></a>
    </li>
    <li class="menu__item">
     <a href="Fournisseur.php" style="text-decoration: none;"><button class="menu__link">Fournisseur</button></a>
    </li>
    <li class="menu__item">
     <a href="Filaments.php" style="text-decoration: none;"><button class="menu__link">Filaments</button></a>
    </li>
    <li class="menu__item">
     <button class="menu__link" onclick="openForm()">Se Connecter</button>
    </li>
  </ul>
</nav>
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
