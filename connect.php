<?php

$hostname = "localhost";
$username = "Jenny"; 
$password = "2345";
$database = "recipes_tb";

// creating a connection to the db
$connect = mysqli_connect ($hostname, $username, $password, $database);

if($connect){
  echo "success";
};
?>