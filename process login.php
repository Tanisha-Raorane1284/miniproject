<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate the credentials (you would typically check against a database here)
    if ($username == "sample_username" && $password == "sample_password") {
        // Authentication successful
        $_SESSION["username"] = $username;
        header("Location: dashboard.php");
    } else {
        // Authentication failed
        echo "Invalid credentials. Please try again.";
    }
}
?>
