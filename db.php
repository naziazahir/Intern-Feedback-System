<?php
// Database configuration
$host = 'localhost'; // Your database host
$db_name = 'feedback_system'; // Your database name
$username = 'root'; // Your database username
$password = ''; // Your database password

// Connect to the database
$conn = new mysqli($host, $username, $password, $db_name);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

