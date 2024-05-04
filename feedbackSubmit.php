<?php

// Create connection
$link = mysqli_connect("localhost","root", "", "plant");

// Check connection
if ($link === false) {
    die("Connection failed: " . mysqli_connect_error());
}
function testInput($input){

    $input=trim($input);
    $input=stripcslashes($input);
    return $input;
}

$message = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = testInput($_POST['namee']); 
    $email = testInput($_POST['email']);
    $notes = testInput($_POST['notes']);
    $rating = testInput($_POST['radioset']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format";
    } else { 
        $sql = "INSERT INTO feedback (name, email, notes, rating) VALUES ('$name','$email','$notes','$rating')";
        mysqli_query($link, $sql);  
        $message = "Thanks for your feedback";
}

// Close connection
mysqli_close($link);

// Print the message
echo $message;
}

