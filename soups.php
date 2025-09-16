<?php
// insert connection file
include('connect.php');
// write a read query
$get_recipes = "SELECT * FROM `recipes_tb` WHERE `recipe_type`='soup'";

// Send the query to the server
$send_query = mysqli_query($connect, $get_recipes);

// Recieve data from server
$recipes = mysqli_fetch_all($send_query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soups</title>
  <link rel="stylesheet" href="css/materialize.css">
    <!-- link icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>  
  @import url('https://fonts.googleapis.com/css2?family=Oregano:ital@0;1&display=swap');
        html {
        font-family: "Oregano", cursive;
        font-weight: 400;
        font-style: normal;
      }
</style>
  </head>
<body>
  <div class="parallax-container">
    <div class="parallax"><img src="img/soup-main.jpg"></div>
  </div>
  
        <!-- soup -->
        <div class="container">
        <h1 id="soups" class="soup red-text text-darken-4">Soups</h1>
        <p class="flow-text">Warm up with a bowl of comfort from our soothing soup selection! Our chefs have crafted a variety of delicious and nutritious soups to nourish both body and soul. From classic favorites like creamy tomato and savory chicken noodle, to international inspirations and innovative twists, our soups are made fresh daily with only the finest ingredients. Whether you're looking for a quick pick-me-up or a satisfying meal, our soups are the perfect choice. Explore our menu to discover your new favorite soup and let the warmth begin!</p>
        </div>
        <!-- card section -->
        <section class="section">
            <div class="container">
                <h3 class="red-text text-darken-4 center"> Soups </h3>
                <div class="row">
                     <?php foreach ($recipes as $recipe) { ?>
                    <div class="col s12 m6 l4"> 
                        <div class="card medium hoverable">
                            <div class="card-image">
                                <img src="img/soup-main.jpg" class="responsive-img materialboxed" alt="soups">
                            </div>
                            <div class="card-content">
                                <span class="card-title underline-text blue-text text-darken-4">
                                  <strong>
                                    <a href="details.php?recipe_id=<?php echo $recipe['recipe_id'] ?>"
                                      class="blue-text text-darken-4"><?php echo $recipe ['recipe_name'] ?>
                                    </a>
                                  </strong>
                                </span>
                                
                                <p class=""><?php echo $recipe ['description'] ?> </p>
                            </div>
                            <div class="card-action center-align">
                                <a href="" class="red-text text-darken-4">INGREDIENTS</a>
                                <a href="" class="red-text text-darken-4">COOK</a>
                            </div>
                        </div>
                    </div>
                    <?php };?>
                </div> 
            </div>
            <div class="container">
            <div class="center">
                <button data-target="nav" class="btn modal-trigger red red-darken-4">See more recipes</button>
            </div>

            <div id="nav" class="modal">
              <div class="container">
                <ul>
                  <li> <a href="cakes.php">Cakes</a></li>
                  <li> <a href="soups.php">Soups</a></li>
                  <li> <a href="chicken.php">Chicken</a></li>
                </ul>
              </div>
            </div>
            </div>
        </section>


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