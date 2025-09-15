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
  <title>Cakes</title>
  <link rel="stylesheet" href="css/materialize.css">
    <!-- link icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>       
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap');

html{
        font-family: "Josefin Sans", sans-serif !important;
        font-style: normal;
      }
     
    </style>
  </head>
<body>
  <div class="parallax-container">
    <div class="parallax"><img src="img/chicken-main.jpg"></div>
  </div>
  
        <!-- chicken -->
        <div class="container">
        <h1 id="cakes" class="cake orange-text text-darken-4">Chicken</h1>
        <p class="flow-text">Our chicken dishes are a cut above the rest, with tender, juicy meat and flavors that will make your taste buds dance. From classic comfort food like crispy fried chicken and creamy chicken pasta, to international inspirations and spicy twists, our chicken menu has something for everyone. Our chefs use only the freshest, highest-quality chicken, cooked to perfection to bring out the full flavor and texture. Whether you're in the mood for a satisfying meal or a quick bite, our chicken dishes are sure to hit the spot. Browse our menu to explore our finger-lickin' good chicken options!.</p>
        </div>
        <!-- card section -->
        <section class="section">
            <div class="container">
                <h3 class="orange-text text-darken-4 center"> Chicken </h3>
                <div class="row">
                     <?php foreach ($recipes as $recipe) { ?>
                    <div class="col s12 m6 l4"> 
                        <div class="card large hoverable">
                            <div class="card-image">
                                <img src="img/spagetti.png" class="responsive-img materialboxed" alt="">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator orange-text text-darken-4"><strong><?php echo $recipe ['recipe_name'] ?> </strong></span>
                                <p class=""><?php echo $recipe ['description'] ?> </p>
                            </div>
                            <div class="card-action center-align">
                                <a href="" class="orange-text text-darken-4">INGREDIENTS</a>
                                <a href="" class="orange-text text-darken-4">COOK NOW</a>
                            </div>
                        </div>
                    </div>
                    <?php };?>
                </div> 
            </div>
        </section>


  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){
    $('.parallax').parallax();
  });
  </script>
</body>
</html>