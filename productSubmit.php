<?php
// Create connection
$link = mysqli_connect("localhost", "root", "1234567890Nn", "plant");

// Check connection
if ($link === false) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!empty($_FILES['plant_image']['name'])) {
        // File is selected
        if($_FILES['plant_image']['error'] === UPLOAD_ERR_OK) {
            // Check if the uploaded file is an image
            $allowed_types = array('image/jpeg', 'image/png', 'image/gif');
            $file_type = $_FILES['plant_image']['type'];
            
            if(in_array($file_type, $allowed_types)) {
                // Process the file since it's an image
                $temp_file = $_FILES['plant_image']['tmp_name'];
                $upload_directory = 'uploads/'; // Specify your upload directory
                $destination_file = $upload_directory . uniqid() . '_' . $_FILES['plant_image']['name'];

                // Move the file from temporary location to the destination directory
                if(move_uploaded_file($temp_file, $destination_file)) {
                    // File moved successfully
                    $image_path = $destination_file;
                    // Retrieve other form data
                    $plant_name = $_POST['plant_name'];
                    $description = $_POST['description'];
                    $price = $_POST['price'];
                    $plant_type = $_POST['plant_type'];

                    // Now you have both image path and other form data
                    // Proceed with your SQL query
                    $sql = "INSERT INTO plants (category, name, description,price,image1_path) VALUES ('$plant_type', '$plant_name', '$description', '$price',  '$image_path')";
                    mysqli_query($link, $sql);  
                    echo 'File uploaded successfully.';
                } else {
                    // Error moving file
                    echo 'Error uploading file.';
                }
            } else {
                echo 'Only JPEG, PNG, and GIF files are allowed.';
            }
        } else {
            // Handle upload errors
            echo 'Error uploading file.';
        }
    } else {
        echo 'Please select a file to upload.';
    }
}

