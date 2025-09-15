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
  <title>Details</title>
</head>
<body>
  <div class="container">
    
    <h1 class="orange-text text-darken-4"><?php  echo($recipe['recipe_name'])?></h1>
    <p class="font-bold">Description: <?php  echo($recipe['description'])?></p>
    <p>Ingredients: <?php  echo($recipe['ingredients'])?></p>
    <p>Duration: <?php  echo($recipe['duration'])?> mins</p>
    <a class="btn btn-small orange darken-4" href="read.php"><i class="material-icons tiny">keyboard_arrow_left</i></a>
  </div>
</body>
</html>