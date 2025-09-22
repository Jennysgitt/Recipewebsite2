<?php
// accessing recipe id from the url
// echo($_GET['recipe_id']);
// save as a varaible
$recipe_id=$_GET['recipe_id'];
// echo $recipe_id;
// getting a single record from the databse
// 1. Initiate the connection
include('connect.php');
// 2. write the query
$get_recipe = "SELECT * FROM `recipes_tb` WHERE `recipe_id`= $recipe_id";
// 3. Send the query to the server
$send_query = mysqli_query($connect, $get_recipe);
// 4. Recieve data from server
$recipe = mysqli_fetch_assoc($send_query);
// print_r($recipe);

$primaryColor = $recipe['primary_color'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title><?php  echo($recipe['recipe_name'])?></title>
  <style>
     @import url('https://fonts.googleapis.com/css2?family=Oregano:ital@0;1&display=swap');
        html {
        font-family: "Oregano", cursive;
        font-weight: 400;
        font-style: normal;
      }
       .underline-text {
        text-decoration: underline !important;
      }
      :root {
    --primary-color: <?php echo $recipe['primary_color']; ?>;
      }
    
    .primary-text {
            color: var(--primary-color) !important;
      }

    .primary-bg {
            background-color: var(--primary-color) !important;
            color: white !important;
      }
      .gradient-bg{
            background: linear-gradient(to bottom, #ffffff, var(--primary-color));
        }
    
  </style>
</head>
<body>
  <div class="parallax-container">
    <div class="parallax"><img src="img/<?php echo $recipe['recipe_type']?>-main.jpg" alt="" class="responsive-img"></div>
  </div>
  <div class="container">    
    <h1 class="valign-wrapper primary-text text-darken-4">
      <span>
        <?php  echo($recipe['recipe_name'])?>
      </span>
      <div style="margin-left: 10px; !important; margin-top: 15px !important" class="chip circle primary-bg darken-4 primary-text right"><?php  echo($recipe['recipe_type'])?>    
    </div>
    <!-- <i class="material-icons red-text right">delete_forever</i> -->
    </h1> 
    <ul class="collection">
      <li class="collection-item avatar valign-wrapper">
        <i class="circle primary-bg darken-4 small material-icons">message</i>
        <p class="font-bold"> <?php  echo($recipe['description'])?></p>
        <a href="update.php?recipe_id=<?php echo($recipe['recipe_id'])?>&recipe_name=?<?php echo($recipe['recipe_name'])?>">

          <i class="primary-text text-darken-4 material-icons right">
            create
          </i>
        </a>
      </li>

      <li class="collection-item avatar valign-wrapper">
        <i class="circle primary-bg darken-4 small material-icons">menu</i>
        <p> <?php  echo($recipe['ingredients'])?></p>
      </li>

      <li class="collection-item avatar valign-wrapper">
        <i class="circle primary-bg darken-4 small material-icons">access_time</i>
        <p> <?php  echo($recipe['duration'])?> mins</p>
      </li>

      <li class="collection-item avatar valign-wrapper">
        <i class="circle primary-bg darken-4 small material-icons">date_range</i>
        <p> <?php  echo($recipe['date_created'])?></p></li>
    </ul>  
    <br>  
    <div class="center-align">
      <a class="btn btn-large btn-flat primary-bg white-text darken-4" href="index.php">
        <i class="material-icons tiny left">keyboard_arrow_left</i>
        <span>Back</span>
      </a>
      <a class="btn btn-large btn-flat white-text red darken-4" href="delete.php?recipe_id=<?php echo($recipe['recipe_id'])?>">
        <i class="material-icons tiny right">delete_forever</i>
        <span>Delete</span>
      </a>
    </div>
  </div>
  <br>
  <br>
  <footer class="page-footer section gradient-bg">
            <div class="container section">
                <div class="row section">
                        <div class="col s12 m3 l3">
                            <h4 class="white-text text-darken-4">About</h4>
                            <ul>
                                <li> <a href="#whoweare" class="black-text">Who We Are</a></li>
                                <li> <a href="#meet" class="black-text">Meet the Circle</a></li>
                                <li> <a href="#reviews" class="black-text">FAQs</a></li>
                            </ul>
                        </div>
                        <div class="col s12 m3 l3">
                            <h4 class="white-text text-darken-4">Explore</h4>
                            <ul>
                                <li> <a href="recipes.php" class="black-text">Recipes</a></li>
                                <li> <a href="cakes.php" class="black-text"> Cake</a></li>
                                <li> <a href="soups.php" class="black-text"> Soups</a></li>
                                <li> <a href="chicken.php" class="black-text"> Chicken</a></li>
                            </ul>
                        </div>
                        <div class="col s12 m3 l3">
                            <h4 class="white-text text-darken-4">Legal</h4>
                            <ul>
                                <li> <a href="#home" class="black-text">Privacy Policy</a></li>
                                <li> <a href="#cakes" class="black-text">Term & Conditions</a></li>
                                <li> <a href="#soups" class="black-text">Disclosure</a></li>                            
                            </ul>                               
                        </div>
                        <div class="col s12 m3 l3">
                            <h4 class="white-text text-darken-4">Contact Us</h4>
                            <p class="black-text">
                              +2349024364876
                            </p>
                            <p class="black-text">customersupport@recipe.com   </p>                 
                        </div>                    
                </div> 
                <div class="white-text center-align">
                    &copy 2025 Recipe.com.<a href="https://github.com/Jennysgitt" class="white-text">All rights reserved</a>           
                </div>
            </div> 
        </footer>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){
    $('.parallax').parallax();
    $('.modal').modal();
  });
  </script>
</body>
</html>