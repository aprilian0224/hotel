<?php
// Assuming you have a database connection established

// Retrieve form data
$name = $_POST['name'];
// Retrieve other form data similarly

// Upload image
$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["profile_picture"]["name"]);
move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $targetFile);

// Insert data into 'users' table
$sqlUser = "INSERT INTO users (name, profile_picture) VALUES ('$name', '$targetFile')";
// Execute SQL query

// You can continue with similar queries for other tables

// Redirect or display success message
?>