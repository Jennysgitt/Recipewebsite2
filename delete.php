<?php 

// Include the connection
include('connect.php');

// Get the ID for the URL
$recipe_id=$_GET['recipe_id'];
// echo $recipe_id;

// Fetch Data row to be deleted
$get_recipe = "SELECT * FROM `recipes_tb` WHERE `recipe_id`= '$recipe_id'";
// 3. Send the query to the server
$send_query = mysqli_query($connect, $get_recipe);
// 4. Recieve data from server
$recipe = mysqli_fetch_assoc($send_query);

// print_r($recipe);

//Create an empty delete variable
$delete_id = "";

// Check if the delete button is prressed
if(isset($_POST['delete'])){
  // Store the Delte ID frrom the POSt Array
  $delete_id = $_POST['delete_id'];

  // Wrrite the delete query
  $delete_query = "DELETE FROM `recipes_tb` WHERE `recipe_id` = '$delete_id'";

  // Send the querry
  $send_delete_query = mysqli_query($connect, $delete_query);

  // Check if data row is deleted
  if($send_delete_query){
    header('Location: landing.php');
  }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete </title>
  <link rel="stylesheet" href="css/materialize.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <div class="parallax-container">
    <div class="parallax"><img src="img/delete1.jpg"></div>
  </div>
  <div class="center-align">
  <h1>Are you sure you want to delete <?php  echo($recipe['recipe_name'])?>?</h1>
  <form action="delete.php" method="post">
    <!-- <input type="text" name="delete_id" value=" <?php echo($recipe['recipe_id'])?>"> -->
    <!-- <input type="submit" value="delete" name="delete"> -->
    <a class="btn btn-large btn-flat white-text blue darken-4" href="recipes.php">
      <i class="material-icons tiny left">keyboard_arrow_left</i>
      <span>Back</span>
    </a>
    <a class="btn btn-large btn-flat white-text red darken-4" href="delete.php?recipe_id=<?php echo($recipe['recipe_id'])?>">
      <i class="material-icons tiny right">delete_forever</i>
      <span>Delete</span>
    </a>
  </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
    $(document).ready(function(){
    $('.parallax').parallax();
    });
    </script>
</body>
</html>