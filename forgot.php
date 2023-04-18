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
    $email = $_POST['email'];
    $number = $_POST['number'];
    $country_code = $_POST['country_code'];

    // Check if the username is already taken
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['number'] != $number || $row['c_code'] != $country_code) {
            $alert_message = "Wrong credentials. Try Again!";
            include('signup.php');
            $string_variable = "forgot";
            echo "<script>switchForm('$string_variable');</script>";
        } else {
            $code = $row['code']; // Fetch the code from the database
            $message = "Hello, your temporary password for " . $email . " is " . $code . ".";
            $random_number = rand(0, 999999);
            $new_pass = password_hash($code, PASSWORD_DEFAULT);
            // Format the random number to be six digits using leading zeros
            $new_code = str_pad($random_number, 6, "0", STR_PAD_LEFT);
            $query = "UPDATE users SET password = '$new_pass', code = '$new_code' WHERE email='$email'";
            $result = mysqli_query($conn, $query);
            $alert_message = $message;
            include('signup.php');
            $string_variable = "login";
            echo "<script>switchForm('$string_variable');</script>";
        }
    } else {
        $alert_message = 'User does not exist.';
        include('signup.php');
    }
}
// Close the database connection
mysqli_close($conn);

?>