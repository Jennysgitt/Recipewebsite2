<?php

include('connect.php');

if(isset($_GET['recipe_id'])){
  $recipe_id = $_GET['recipe_id'];
  $fetch_query = "SELECT * FROM recipes_tb WHERE recipe_id = '$recipe_id'";

  $send_query = mysqli_query($connect, $fetch_query);

  $recipe = mysqli_fetch_assoc($send_query);

}

$update_id = '';
$update_recipe_name = '';
$update_duration = '';
$update_ingredients = '';

if(isset($_POST['update'])){
  print_r($_POST);
  $update_id = htmlspecialchars($_POST['update_id']);
  $update_recipe_name = htmlspecialchars($_POST['update_recipe_name']);
  $update_duration = htmlspecialchars($_POST['update_duration']);
  $update_ingredients = htmlspecialchars($_POST['update_ingredients']);

  $update_query = "UPDATE recipes_tb SET recipe_name='$update_recipe_name', duration='$update_duration', ingredients='$update_ingredients' WHERE recipe_id='$update_id'";

  $send_update_query = mysqli_query($conn, $update_query);

  if($send_update_query){
    header("Location: view_recipe.php?recipe_id=$update_id");
  } else {
    echo 'Could not update' . mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Fav Icon 👀👇🏾 -->
  <link rel="shortcut icon" href="assets/img/rcon.png" type="image/x-icon">
  <title>Update <?php echo $recipe['recipe_name'] ?> </title>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
  <style>
    *{
      font-family: "Josefin Sans", serif;
      font-optical-sizing: auto;
      font-style: normal;
      }

      .underline-text {
        text-decoration: underline !important;
      }
  </style>
</head>
<body>
    <div class="slider hide-on-med-and-down">
      <ul class="slides">
        <li>
          <img src="assets/img/chef_writing.jpg" class="responsive-img" alt="">
        </li>
      </ul>
    </div>
  <div class="section container">
    <div class="container">
      <br>
      <h4 class="center-align">Update <?php echo $recipe['recipe_name']?> Details</h4>
      <br>
      <form action="update_recipe.php" method="POST">
        <div class="row">
          <div class="col s12 l1 input-field hide">
            <label for="update_id">ID</label>
            <input type="text" name="update_id" id="update_id" value="<?php echo $recipe['recipe_id'] ?>">
          </div>
          <div class="col s12 l10 input-field">
            <label for="update_recipe_name">Recipe Name</label>
            <input type="text" name="update_recipe_name" id="update_recipe_name" placeholder="<?php echo $recipe['recipe_name'] ?>">
          </div>
          <div class="col s12 l2 input-field">
            <label for="update_duration">Duration (mins)</label>
            <input type="number" name="update_duration" id="update_duration" placeholder="<?php echo $recipe['duration'] ?>">
          </div>
          <div class="col s12 l12 input-field">
            <label for="update_ingredients">Ingredients</label>
            <input type="text" name="update_ingredients" id="update_ingredients" placeholder="<?php echo $recipe['ingredients'] ?>">
          </div>
          <br>
          <div class="center-align section">
            <input type="submit" name="update" value="update" class="btn btn-flat btn-large yellow darken-3 white-text">
          </div>
        </div>
      </form>
    </div>
  </div>

  <script src="assets/js/jqueryv3.4.1.js"></script>
  <script src="assets/js/materialize.js"></script>
  <script>
      $(document).ready(function(){
        $('.slider').slider({indicators:false});
      });
  </script>
</body>
</html>