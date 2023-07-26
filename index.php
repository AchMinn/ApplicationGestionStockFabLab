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
  <link rel="stylesheet" href="index.js">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
      <?php include("header.php") ?>
<div id="bodyWrapper">
  <div class="mx-auto w-full md:w-4/5 px-4">
        <div class="container my-8">
          <div class="flex justify-between items-center mb-4">
            <h2 class="text-3xl font-medium">
              Les machines de FabLab
            </h2>
          </div>
          <div id="scrollContainer" class="flex flex-no-wrap overflow-x-scroll scrolling-touch items-start mb-8">
            <div class="flex-none w-2/3 md:w-1/3 mr-8 md:pb-4 border rounded-lg">
              <a href="#" class="space-y-4">
                <div class="aspect-w-16 aspect-h-9">
                  <img class="object-cover shadow-md hover:shadow-xl rounded-lg" src="https://images.unsplash.com/photo-1547586696-ea22b4d4235d?ixlib=rb-1.2.1&ixqx=3H1AJd0Pae&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt=""
                  />
                </div>
                <div class="px-4 py-2">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold text-gray-800 text-3xl mb-2">
                      Some title goes here
                    </h3>
                  </div>
                  <div class="text-lg">
                    <p class="">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Ad recusandae, consequatur corrupti vel quisquam id itaque
                      nam
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <div class="flex-none w-2/3 md:w-1/3 mr-8 md:pb-4 border rounded-lg">
              <a href="#" class="space-y-4">
                <div class="aspect-w-16 aspect-h-9">
                  <img class="object-cover shadow-md hover:shadow-xl rounded-lg" src="https://images.unsplash.com/photo-1547586696-ea22b4d4235d?ixlib=rb-1.2.1&ixqx=3H1AJd0Pae&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt=""
                  />
                </div>
                <div class="px-4 py-2">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold text-gray-800 text-3xl mb-2">
                      Some title goes here
                    </h3>
                  </div>
                  <div class="text-lg">
                    <p class="">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Ad recusandae, consequatur corrupti vel quisquam id itaque
                      nam
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <div class="flex-none w-2/3 md:w-1/3 mr-8 md:pb-4 border rounded-lg">
              <a href="#" class="space-y-4">
                <div class="aspect-w-16 aspect-h-9">
                  <img class="object-cover shadow-md hover:shadow-xl rounded-lg" src="https://images.unsplash.com/photo-1547586696-ea22b4d4235d?ixlib=rb-1.2.1&ixqx=3H1AJd0Pae&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt=""
                  />
                </div>
                <div class="px-4 py-2">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold text-gray-800 text-3xl mb-2">
                      Some title goes here
                    </h3>
                  </div>
                  <div class="text-lg">
                    <p class="">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Ad recusandae, consequatur corrupti vel quisquam id itaque
                      nam
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <div class="flex-none w-2/3 md:w-1/3 mr-8 md:pb-4 border rounded-lg">
              <a href="#" class="space-y-4">
                <div class="aspect-w-16 aspect-h-9">
                  <img class="object-cover shadow-md hover:shadow-xl rounded-lg" src="https://images.unsplash.com/photo-1547586696-ea22b4d4235d?ixlib=rb-1.2.1&ixqx=3H1AJd0Pae&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt=""
                  />
                </div>
                <div class="px-4 py-2">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold text-gray-800 text-3xl mb-2">
                      Some title goes here
                    </h3>
                  </div>
                  <div class="text-lg">
                    <p class="">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Ad recusandae, consequatur corrupti vel quisquam id itaque
                      nam
                    </p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="container my-8">
          <div class="flex justify-between items-center mb-4">
            <h2 class="text-3xl font-medium">
              Les machines de FabLab
            </h2>
          </div>
          <div id="scrollContainer" class="flex flex-no-wrap overflow-x-scroll scrolling-touch items-start mb-8">
            <div class="flex-none w-2/3 md:w-1/3 mr-8 md:pb-4 border rounded-lg">
              <a href="#" class="space-y-4">
                <div class="aspect-w-16 aspect-h-9">
                  <img class="object-cover shadow-md hover:shadow-xl rounded-lg" src="https://images.unsplash.com/photo-1547586696-ea22b4d4235d?ixlib=rb-1.2.1&ixqx=3H1AJd0Pae&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt=""
                  />
                </div>
                <div class="px-4 py-2">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold text-gray-800 text-3xl mb-2">
                      Some title goes here
                    </h3>
                  </div>
                  <div class="text-lg">
                    <p class="">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Ad recusandae, consequatur corrupti vel quisquam id itaque
                      nam
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <div class="flex-none w-2/3 md:w-1/3 mr-8 md:pb-4 border rounded-lg">
              <a href="#" class="space-y-4">
                <div class="aspect-w-16 aspect-h-9">
                  <img class="object-cover shadow-md hover:shadow-xl rounded-lg" src="https://images.unsplash.com/photo-1547586696-ea22b4d4235d?ixlib=rb-1.2.1&ixqx=3H1AJd0Pae&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt=""
                  />
                </div>
                <div class="px-4 py-2">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold text-gray-800 text-3xl mb-2">
                      Some title goes here
                    </h3>
                  </div>
                  <div class="text-lg">
                    <p class="">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Ad recusandae, consequatur corrupti vel quisquam id itaque
                      nam
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <div class="flex-none w-2/3 md:w-1/3 mr-8 md:pb-4 border rounded-lg">
              <a href="#" class="space-y-4">
                <div class="aspect-w-16 aspect-h-9">
                  <img class="object-cover shadow-md hover:shadow-xl rounded-lg" src="https://images.unsplash.com/photo-1547586696-ea22b4d4235d?ixlib=rb-1.2.1&ixqx=3H1AJd0Pae&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt=""
                  />
                </div>
                <div class="px-4 py-2">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold text-gray-800 text-3xl mb-2">
                      Some title goes here
                    </h3>
                  </div>
                  <div class="text-lg">
                    <p class="">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Ad recusandae, consequatur corrupti vel quisquam id itaque
                      nam
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <div class="flex-none w-2/3 md:w-1/3 mr-8 md:pb-4 border rounded-lg">
              <a href="#" class="space-y-4">
                <div class="aspect-w-16 aspect-h-9">
                  <img class="object-cover shadow-md hover:shadow-xl rounded-lg" src="https://images.unsplash.com/photo-1547586696-ea22b4d4235d?ixlib=rb-1.2.1&ixqx=3H1AJd0Pae&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt=""
                  />
                </div>
                <div class="px-4 py-2">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold text-gray-800 text-3xl mb-2">
                      Some title goes here
                    </h3>
                  </div>
                  <div class="text-lg">
                    <p class="">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Ad recusandae, consequatur corrupti vel quisquam id itaque
                      nam
                    </p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
  </div>
</div>

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
