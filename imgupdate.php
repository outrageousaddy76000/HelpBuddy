<?php
session_start(); // start the session

// connect to the database
$host = 'localhost';
$username = "help_admin";
$password = "2UfFvKihElhcjB9D";
$dbname = "help_database";
$conn = mysqli_connect($host, $username, $password, $dbname);
$email = $_SESSION['email'];
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'"));
if(isset($_FILES["fileImg"]["name"])){

    $src = $_FILES["fileImg"]["tmp_name"];
    $imageName = uniqid() . $_FILES["fileImg"]["name"];

    $target = "img/" . $imageName;

    move_uploaded_file($src, $target);

    $query = "UPDATE users SET image = '$imageName' WHERE email = '$email'";
    mysqli_query($conn, $query);
    header("Location: ldashboard.php");
}
?>