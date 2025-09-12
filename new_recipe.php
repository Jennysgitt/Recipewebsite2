<?php
// connect to db
include('connect.php');

// create blank var to store data from form
$recipe_name = "";
$recipe_type = "";
$description = "";
$ingredients = "";
$duration = "";

// check if the submit button is clicked
if(isset($_POST['submit'])){
  // print_r($_POST);
  // store recieved data into the blank variables 
  $recipe_name = htmlspecialchars($_POST['recipe_name']);
  $recipe_type = htmlspecialchars($_POST['recipe_type']);
  $description = htmlspecialchars($_POST['description']);
  $ingredients = htmlspecialchars($_POST['ingredients']);
  $duration = htmlspecialchars($_POST['duration']);

  // write query
  $save_query = "INSERT INTO `recipes_tb`(`recipe_name`, `description`, `recipe_type`, `ingredients`, `duration`) VALUES ('$recipe_name','$recipe_type','$description','$ingredients','$duration')";
  // send to server
  $send_query = mysqli_query($connect, $save_query);

  // to check if data is saved
  if($send_query){
    header('Location: read.php');
  };
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Add Recipe</title>
</head>
<body> 
    <section class="section container">
        <div class="container">
          <div class="container">
          <h3 class="center-align orange-text text-darken-4">Add a New Recipe</h3>
          <br>
          
          <br>
          <form action="add_recipe.php" method="post">
            <div class="row">
              <div class="col s12 l8 input-field">
                <label for="recipe_name">Recipe Name</label>
                <input type="text" name="recipe_name" id="recipe_name">
              </div>
              <div class="col s12 l4 input-field">
                <select id="recipe_type" name="recipe_type" class="grey-text">
                  <option class="orange-text text-darken-4" value="cake">Cake</option>
                  <option class="orange-text text-darken-4" value="chicken">Chicken</option>
                  <option class="orange-text text-darken-4" value="soup">Soup</option>
                </select>
                <label for="recipe_type">Recipe Type</label>
              </div>
            </div>
            <div class="row">
              <div class="col s12 input-field">
                <textarea id="description" name="description" class="materialize-textarea"></textarea>
                <label for="description">Description</label>
              </div>
            </div>
            <div class="row">
              <div class="col s12 l10 input-field">
                <input type="text" name="ingredients" id="ingredients">
                <label for="ingredients">Ingredients</label>
              </div>
              <div class="col s12 l2 input-field">
                <input type="number" name="duration" id="duration">
                <label for="duration">Duration</label>
              </div>
            </div>
            <div class="row">
              <div class="col s12 center-align">
                <input type="submit" value="submit" name="submit" class="btn btn-large btn-flat orange darken-4 white-text">
              </div>
            </div>
          </form>
          </div>
        </div>
  
      </section>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
     $(document).ready(function(){
    $('select').formSelect();
  });
  </script>
</body>
</html>