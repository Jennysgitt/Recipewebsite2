<?php
// insert connection file
include('connect.php');
// write a read query
$get_recipes = "SELECT * FROM `recipes_tb` WHERE `recipe_type`='chicken'";

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
  <title>Chicken</title>
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
       .underline-text {
        text-decoration: underline !important;
      }
  </style>
</head>
<body>
  <div class="parallax-container">
    <div class="parallax">
      <img src="img/chicken-main.jpg">
    </div>
  </div>
  
        <!-- chicken -->
        <div class="container">
        <h1 id="chicken" class="chicken green-text text-darken-4">Chicken</h1>
        <p class="flow-text">Our chicken dishes are a cut above the rest, with tender, juicy meat and flavors that will make your taste buds dance. From classic comfort food like crispy fried chicken and creamy chicken pasta, to international inspirations and spicy twists, our chicken menu has something for everyone. Our chefs use only the freshest, highest-quality chicken, cooked to perfection to bring out the full flavor and texture. Whether you're in the mood for a satisfying meal or a quick bite, our chicken dishes are sure to hit the spot. Browse our menu to explore our finger-lickin' good chicken options!.</p>
        </div>
        <!-- card section -->
        <section class="section">
            <div class="container">
                <h3 class="green-text text-darken-4 center"> Chicken </h3>
                <div class="row">
                     <?php foreach ($recipes as $recipe) { ?>
                    <div class="col s12 m6 l4"> 
                        <div class="card medium hoverable">
                            <div class="card-image">
                                <img src="<?php echo $recipe['recipe_name'] ?>-main.jpg" class="responsive-img" alt="chicken">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator underline-text green-text text-darken-4">
                                  <strong>
                                    <a href="details.php?recipe_id=<?php echo $recipe['recipe_id'] ?>"
                                      class="green-text text-darken-4"><?php echo $recipe ['recipe_name'] ?>
                                    </a> 
                                  </strong>
                                </span>
                                <p class=""><?php echo $recipe ['description'] ?> </p>
                            </div>
                            <div class="card-action center-align">
                                <span class="green-text text-darken-4 activator left" style="cursor: pointer;">INGREDIENTS</span>
                                <a 
                                  href="https://www.youtube.com/results?search_query=<?php echo 'How to Prepare '. $recipe ['recipe_name'] ?>"
                                  target="_blank"
                                  class="green-text text-darken-4">
                                  COOK NOW
                                </a>
                            </div>
                            <div class="card-reveal">
                              <span class="card-title green-text text-darken-4">Ingredients<i class="material-icons right">close</i></span>
                              <p><?php echo $recipe['ingredients'] ?></p>
                           </div>
                        </div>
                    </div>
                    <?php };?>
                </div> 
            </div>
            <div class="container">
            <div class="center">
                <button data-target="nav" class="btn modal-trigger green green-darken-4">See more recipes</button>
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