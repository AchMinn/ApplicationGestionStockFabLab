<?php 
session_start();
include("config.php");
if(isset($_SESSION['username']))
 {
    header("Location:loggedinIndex.php"); 
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>
  <link rel="stylesheet" href="index.js">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
      <?php include("header.php") ?>
<div id="bodyWrapper">
      <?php 
       ?>
  <div class="mx-auto w-full md:w-4/5 px-4">
        <div class="container my-8">
          <div class="flex justify-between items-center mb-4">
            <h2 class="text-3xl font-medium">
              Les machines de FabLab
            </h2>
          </div>
          <div id="scrollContainer" class="flex flex-no-wrap overflow-x-scroll scrolling-touch items-start mb-8">
            <div class="flex-none w-2/3 md:w-1/3 mr-8 md:pb-4 border rounded-lg">
                <div class="aspect-w-16 aspect-h-9">
                  <img class="object-cover shadow-md hover:shadow-xl rounded-lg" src="../Images/Raise3D.jpg" alt="Not Found"
                  />
                </div>
                <div class="px-4 py-2">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold text-gray-800 text-3xl mb-2">
                      Raise 3D E2CF
                    </h3>
                  </div>
                  <div class="text-lg">
                    <p class="">
                      est une imprimante 3D IDEX optimisée pour l'impression 3D de filaments renforcés de fibre de carbone. 
                    </p>
                  </div>
                </div>
            </div>
            <div class="flex-none w-2/3 md:w-1/3 mr-8 md:pb-4 border rounded-lg">
                <div class="aspect-w-16 aspect-h-9">
                  <img class="object-cover shadow-md hover:shadow-xl rounded-lg" src="../Images/TechnoDrill3.jpg" alt=""
                  />
                </div>
                <div class="px-4 py-2">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold text-gray-800 text-3xl mb-2">
                      TechnoDrill 3
                    </h3>
                  </div>
                  <div class="text-lg">
                    <p class="">
                      une machine de prototypage rapide 3D. Il peut percer, couper, distribuer du plastique, du métal et des PCB avec une grande précision, et également graver la face avant de l'aluminium ou du plastique.
                    </p>
                  </div>
                </div>
            </div>
            <div class="flex-none w-2/3 md:w-1/3 mr-8 md:pb-4 border rounded-lg">
                <div class="aspect-w-16 aspect-h-9">
                  <img class="object-cover shadow-md hover:shadow-xl rounded-lg" src="../Images/CIF.jpg" alt=""
                  />
                </div>
                <div class="px-4 py-2">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold text-gray-800 text-3xl mb-2">
                      TechnoDrill 2
                    </h3>
                  </div>
                  <div class="text-lg">
                    <p class="">
                      elle grave, perce et détoure des pièces plastique, métal, l'aluminium et les circuits imprimés.,Telle une machine à commande numérique, elle façonne les pièces quelle que soit la source du dessin.
                    </p>
                  </div>
                </div>
            </div>
            <div class="flex-none w-2/3 md:w-1/3 mr-8 md:pb-4 border rounded-lg">
                <div class="aspect-w-16 aspect-h-9">
                  <img class="object-cover shadow-md hover:shadow-xl rounded-lg" src="../Images/Imprim3dInterne.jpg" alt=""
                  />
                </div>
                <div class="px-4 py-2">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold text-gray-800 text-3xl mb-2">
                      La Stratasys Dimension 1200es 
                    </h3>
                  </div>
                  <div class="text-lg">
                    <p class="">
                      une imprimante 3D professionnelle qui utilise la technologie Fused Deposition Modeling (FDM) pour produire des modèles 3D en thermoplastiques ABS.
                    </p>
                  </div>
                </div>
            </div>
          </div>
        </div>
  </div>
</div>

<script>
function openForm() {
  document.getElementById("login").style.display = "block";
  document.getElementById("form").style.display = "block";
  document.getElementById("register").style.display = "none";
  document.getElementById("form1").style.display = "none";
}
function closeForm() {
  document.getElementById("login").style.display = "none";
  document.getElementById("form").style.display = "none";
}
function openForm1() {
  document.getElementById("register").style.display = "block";
  document.getElementById("form1").style.display = "block";
  document.getElementById("login").style.display = "none";
  document.getElementById("form").style.display = "none";
}
function closeForm1() {
  document.getElementById("register").style.display = "none";
  document.getElementById("form1").style.display = "none";
}
</script>
</body>
</html>
