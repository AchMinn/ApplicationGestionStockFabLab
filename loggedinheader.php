<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>logged in header</title>
  <link rel="stylesheet" href="index.js">
  <link rel="stylesheet" href="index.css">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
  <div id="headerWrapper">
<header role="banner">
  <div class="header__avatar"><a href="index.php" style="text-decoration: none;"><img src="../Images/universialogomain.png"></a></div>
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
     <a class="menu__link" href="logout.php" >Se Deconnecter</button>
    </li>
  </ul>
</nav>
        </div>
</body>
</html>
