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
    
    // Check if the email already exists in the newsletter table
    $query = "SELECT email FROM newsletter WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        // Email already exists in the newsletter table
        $alert_message = 'You are already added to our newsletter list!';
    } else {
        // Add the user to the newsletter table
        $query = "INSERT INTO newsletter (email) VALUES ('$email')";
        mysqli_query($conn, $query);
        $alert_message = 'Hurray! You have been added to the HelpBuddy Newsletter!';
    }

    if (!isset($_SESSION['email'])) {
        include 'index.php';
    } else {
        include 'lindex.php';
    }
    
    // Close the database connection
    mysqli_close($conn);
}
?>