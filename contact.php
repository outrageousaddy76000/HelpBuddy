<?php
session_start(); // start the session

// connect to the database
$host = 'localhost';
$username = "help_admin";
$password = "2UfFvKihElhcjB9D";
$dbname = "help_database";
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check if the user has submitted the login form
// Check if the user has submitted the login form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the email from the form submission
    $email = $_POST['email'];
    $name = $_POST['name'];
    $msg = $_POST['message'];
    
    // Add the user to the newsletter table
    $query = "INSERT INTO contact (email,name,msg) VALUES ('$email','$name','$msg')";
    mysqli_query($conn, $query);
    $alert_message = 'Your message has been delivered! We will get back to you soon.';


    if (!isset($_SESSION['email'])) {
        include 'contacts.php';
    } else {
        include 'lcontacts.php';
    }
    
    // Close the database connection
    mysqli_close($conn);
}
?>