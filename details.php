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

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title><?php  echo($recipe['recipe_name'])?></title>
</head>
<body>
  <div class="parallax-container">
    <div class="parallax"><img src="img/<?php echo $recipe['recipe_type']?>-main.jpg" alt="" class="responsive-img"></div>
  </div>
  <div class="container">    
    <h1 class="valign-wrapper blue-text text-darken-4">
      <span>
        <?php  echo($recipe['recipe_name'])?>
      </span>
      <div style="margin-left: 10px; !important; margin-top: 15px !important" class="chip circle blue darken-4 white-text right"><?php  echo($recipe['recipe_type'])?>    
    </div>
    <!-- <i class="material-icons red-text right">delete_forever</i> -->
    </h1> 
    <ul class="collection">
      <li class="collection-item avatar valign-wrapper"><i class="circle white-text blue darken-4 small material-icons">message</i><p class="font-bold"> <?php  echo($recipe['description'])?></p><i class="blue-text text-darken-4 material-icons right">create</i></li>

      <li class="collection-item avatar valign-wrapper"><i class="circle white-text blue darken-4 small material-icons">menu</i><p> <?php  echo($recipe['ingredients'])?></p></li>

      <li class="collection-item avatar valign-wrapper"><i class="circle white-text blue darken-4 small material-icons">access_time</i><p> <?php  echo($recipe['duration'])?> mins</p></li>

      <li class="collection-item avatar valign-wrapper"><i class="circle white-text blue darken-4 small material-icons">date_range</i><p> <?php  echo($recipe['date_created'])?></p></li>
    </ul>  
    <br>  
    <div class="center-align">
      <a class="btn btn-large btn-flat white-text blue darken-4" href="read.php">
        <i class="material-icons tiny left">keyboard_arrow_left</i>
        <span>Back</span>
      </a>
      <a class="btn btn-large btn-flat white-text red darken-4" href="delete.php?recipe_id=<?php echo($recipe['recipe_id'])?>">
        <i class="material-icons tiny right">delete_forever</i>
        <span>Delete</span>
      </a>
    </div>
  </div>
  
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