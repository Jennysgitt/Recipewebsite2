<?php
// insert connection file
include('connect.php');
// write a read query
$get_recipes = "SELECT * FROM `recipes_tb` WHERE `recipe_type`='cake'";

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
    <div class="parallax"><img src="img/cake-main.jpg"></div>
  </div>
  
        <!-- cake -->
        <div class="container">
        <h1 id="cakes" class="cake orange-text text-darken-4">Cakes</h1>
        <p class="flow-text">Indulge your sweet tooth with our decadent cake selection! We're thrilled to introduce our new cake menu, featuring an array of mouth-watering treats to satisfy any craving. From classic vanilla and rich chocolate to creative flavor combinations and show-stopping designs, our cakes are crafted with love and care to provide the perfect ending to your meal. Whether you're celebrating a special occasion or simply treating yourself, our cakes are sure to delight. Browse our menu to explore our signature cake flavors and order your favorite today!.</p>
        </div>
        <!-- card section -->
        <section class="section">
            <div class="container">
                <h3 class="orange-text text-darken-4 center"> Cakes </h3>
                <div class="row">
                     <?php foreach ($recipes as $recipe) { ?>
                    <div class="col s12 m6 l4"> 
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="img/cake-main.jpg" class="responsive-img materialboxed" alt="cakes">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator orange-text text-darken-4"><strong><?php echo $recipe ['recipe_name'] ?> </strong></span>
                                <p class=""> Light as air, a golden delight,
                                    Soft and fluffy, a simple bite.</p>
                            </div>
                            <div class="card-action center-align">
                                <a href="" class="orange-text text-darken-4">INGREDIENTS</a>
                                <a href="" class="orange-text text-darken-4">BAKE NOW</a>
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