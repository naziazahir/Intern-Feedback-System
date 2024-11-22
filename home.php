<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback System - Home</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <style>
        /* Reset default margins and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Make sure html and body take up the full viewport height */
        html, body {
            height: 100%;
            width: 100%;
            overflow-x: hidden;
        }
        
        /* Full-page background for the header */
        .header-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.4)), url("img3.jpeg");
            background-position:center;
            background-size: cover;
            background-repeat: no-repeat;
            width: 100vw;
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            
        }
        #logo{
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        #span{
            margin-left: 10px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img id="logo" src="logo.jpg"><span id="span"><a class="navbar-brand" href="#">Feedback System</a></span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link text-white" href="signup.php">Signup</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="login.php">Login</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="feedback_form.php">Give Feedback</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="view_feedback.php">View Feedback</a></li>
        </ul>
    </div>
</nav>

<!-- Header with Background Image -->
<header class="header-section">
    <div class="container text-center">
        <h1>Welcome to the Intern Feedback System</h1>
        <p>Providing a platform for constructive feedback and improvement</p>
    </div>
</header>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-5">
    <p>&copy; 2023 Feedback System. All rights reserved.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
