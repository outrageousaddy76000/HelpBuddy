

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

    // Connect to the database and query for the user with the email
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    // Check if the user exists
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Check if the password matches
        if (password_verify($password, $user['password'])) {
            // Set the session variable for email and redirect to the same page
            $_SESSION['email'] = $email;
            if (!is_null($user['username'])) {
                // Set the session variable for username
                $_SESSION['username'] = $user['username'];
            }
            header('Location: signup.php');
            exit();
        } else {
            // Display an alert if the password doesn't match
            $alert_message = 'Wrong password. Please try again.';
            include('signup.php');
            $string_variable = "login";
            echo "<script>switchForm('$string_variable');</script>";
            $string_variable2 = "loginid";
            echo "<script>scrollToElement('$string_variable2');</script>";
        }
    } else {
        // Display an alert if the user doesn't exist
        $alert_message = 'User does not exist. Please sign up.';
        include('signup.php');
        $string_variable2 = "signupid";
        echo "<script>scrollToElement('$string_variable2');</script>";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
