<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="index.js">
	<link rel="stylesheet" href="index.css">	
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
	      <div id="headerWrapper">
<header role="banner">
  <div class="header__avatar"><a href="index.php" style="text-decoration: none;"><img src="universialogomain.png"></a></div>
  <div id="login">
  <div id="form">
    <h2>Connecter vous</h2>
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
        </div>
</body>
</html>
