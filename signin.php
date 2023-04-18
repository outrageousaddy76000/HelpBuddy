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
    // Get the email and password from the form submission
    $email = $_POST['email'];
    $password = $_POST['password'];
    $random_number = rand(0, 999999);

    // Format the random number to be six digits using leading zeros
    $code = str_pad($random_number, 6, "0", STR_PAD_LEFT);

    // Connect to the database and query for the user with the email
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    // Check if the user already exists
    if (mysqli_num_rows($result) > 0) {
        // Display an alert if the user already exists
        $alert_message = 'User already exists. Please login.';
        include('signup.php');
        $string_variable = "login";
        echo "<script>switchForm('$string_variable');</script>";
        $string_variable2 = "loginid";
        echo "<script>scrollToElement('$string_variable2');</script>";
    } else {
        // Hash the password using the default algorithm and options
        $hash = password_hash($password, PASSWORD_DEFAULT);

        // Add the user to the database
        $query = "INSERT INTO users (email, password,code) VALUES ('$email', '$hash','$code')";
        mysqli_query($conn, $query);

        // Set the session variable for email and redirect to the logged-in page
        $_SESSION['email'] = $email;
        header('Location: signup.php');
        exit();
    }

    // Close the database connection
    mysqli_close($conn);
}
?>