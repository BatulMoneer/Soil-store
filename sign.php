<?php
session_start();

// Initialize error messages
$nameErr = $emailErr = $passwordErr = "";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create database connection
    $host = "localhost:3307";
    $dbUsername = "root"; // Change to your database username
    $dbPassword = ""; // Change to your database password
    $dbname = "plant";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Validate name
    if (empty($_POST['name'])) {
        $nameErr = "Name is required";
    } else {
        $validated_name = $conn->real_escape_string(trim($_POST['name']));
    }

    // Validate email
    if (empty($_POST['email'])) {
        $emailErr = "Email is required";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    } else {
        $validated_email = $conn->real_escape_string(trim($_POST['email']));
        // Check if email already exists
        $sql_email_check = "SELECT email FROM users WHERE email = '$validated_email'";
        $result = $conn->query($sql_email_check);
        if ($result->num_rows > 0) {
            $emailErr = "This email is already in use. Please use a different email.";
        }
    }

    // Validate password
    if (empty($_POST['password'])) {
        $passwordErr = "Password is required";
    } else {
        $validated_password = password_hash($conn->real_escape_string(trim($_POST['password'])), PASSWORD_DEFAULT);
    }

    // Assuming password confirmation logic is handled on the client side or here if needed

    // If there are no errors, insert the validated data into the database
    if (empty($nameErr) && empty($emailErr) && empty($passwordErr)) {
        $sql = "INSERT INTO users (username, email, password) VALUES ('$validated_name', '$validated_email', '$validated_password')";
        
        if ($conn->query($sql) === TRUE) {
            $_SESSION["loggedin"] = true;
            $_SESSION["name"] = $validated_name; // Storing the user's name in session
            $_SESSION["email"] = $validated_email; // Storing the user's email in session

            // Redirect to home.html
            header("Location: Home.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}

// Include sign.html
include('signup.php');
?>