<?php
session_start(); // start the session

// connect to the database
$host = 'localhost';
$username = "help_admin";
$password = "2UfFvKihElhcjB9D";
$dbname = "help_database";
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check if the user has submitted the login form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username =$_POST['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $number = $_POST['number'];
    $country_code = $_POST['country_code'];

    // Check if the username is already taken
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // If username already exists, show an alert and redirect to the registration page
        $alert_message = 'Username already exists. Please choose another.';
            include('dashboard.php');
    } else {
        // Update user and insert into the database
        $email = $_SESSION['email'];
        $query = "UPDATE users SET username='$username', c_code='$country_code',lname='$lname', fname='$fname', gender='$gender',number='$number' , age='$age' WHERE email='$email'";
        mysqli_query($conn, $query);

        // Set the session variable for the username
        $_SESSION['username'] = $username;

        // Redirect to the homepage
        header("Location: ldashboard.php");
        exit();
    }
}
// Close the database connection
mysqli_close($conn);

?>