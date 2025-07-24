<?php
  //connect.php
  $localhost = "localhost";
  $username = "root";
  $password = "";
  $database = "form_authentication";

  $conn = new mysqli("localhost", "root", "", "form_authentication");

  if($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
?>