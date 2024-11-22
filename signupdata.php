<?php

// Include the database connection file
include("db.php");

session_start(); // Start session for login and signup

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $gender = trim($_POST['gender']);
    $phoneno = trim($_POST['phoneno']);
    $dob = trim($_POST['dob']);

    // Validate the input (basic validation)
    if (empty($name) || empty($email) || empty($password) || empty($gender) || empty($phoneno) || empty($dob)) {
        echo "All fields are required.";
        exit;
    }

    // Validate phone number (11 digits, starts with 03)
    if (!preg_match("/^03[0-9]{9}$/", $phoneno)) {
        echo "Invalid phone number. It should start with 03 and contain 11 digits.";
        exit;
    }

    // Check if email already exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Email already exists. Please use a different email.";
        exit;
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert the new user into the database
    $stmt = $conn->prepare("INSERT INTO users (name, email, password, gender, phoneno, dob) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $hashedPassword, $gender, $phoneno, $dob);

    if ($stmt->execute()) {
        // Registration successful, redirect to the login page
        header('Location: login.php'); // Redirect to login page after successful registration
        exit; // Ensure the rest of the code does not execute after the redirect
    } else {
        echo "Registration failed. Please try again.";
    }

    // Close statement and connection
    $stmt->close();
}

$conn->close();
?>
