<?php
// Start the session
session_start();

// Remove session variables for email and username
unset($_SESSION['email']);
unset($_SESSION['username']);

// Redirect to signup.php
header('Location: signup.php');
exit();
?>
