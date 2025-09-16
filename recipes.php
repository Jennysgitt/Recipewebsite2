<?php
// insert connection file
include('connect.php');

// write a read query &sorting the name by asc or desc order 
// where is for condition statements
// $get_recipes = "SELECT * FROM `recipes_tb` WHERE `recipe_type` = 'soup' ORDER BY `recipe_name` ASC ";
$get_recipes = "SELECT * FROM `recipes_tb` ORDER BY `recipe_name` ASC ";

// Send the query to the server
$send_query = mysqli_query($connect, $get_recipes);

// Recieve data from server
$recipes = mysqli_fetch_all($send_query, MYSQLI_ASSOC);

// print_r($recipes);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Recipes</title>
</head>
<body>
  <div class="container">
    <h3 class="orange-text text-darken-4 center"> Recipes </h3>
    <div class="row">
      <!-- loop for cards  -->
      <?php foreach ($recipes as $recipe) { ?>
      <div class="col s12 l4">
        <div class="card">
          <div class="card-image">
            <img src="img/cake-main.jpg" alt="book" class="responsive-img">
          </div>
          <div class="card-content">
            <h6 class="orange-text text-darken-4 card-title activator">
              <p>
                <?php echo $recipe ['recipe_name'] ?>
              </p>
              <i class="material-icons right">expand_more</i>
            </h6>
            <p class="valign-wrapper">
              <i class="material-icons tiny">access_time</i>
            <span style="margin-left: 5px;">
              <?php echo $recipe ['duration'] ?> mins</span>
              
            </p>
            </div>
            <div class="card-reveal">
                   <span class="card-title grey-text text-darken-4">
                    <i class="material-icons right">close</i></span>
                    <p><?php echo $recipe ['ingredients'] ?></p>
            </div>
            <div class="card-action right-align">
              <a href="details.php?recipe_id=<?php echo $recipe ['recipe_id'] ?>" class="btn btn-small btn-flat orange darken-4 white-text">Details</a>
            </div>
        </div>
      </div> 
      <?php };?>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){
    $('.modal').modal();
  });
  </script>
</body>
</html>