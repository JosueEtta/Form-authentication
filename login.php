<?php
 session_start();
 require_once 'connect.php';

 if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

    $conn->query("INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')");

    header("Location:table.php");
    exit();
 }
 ?>