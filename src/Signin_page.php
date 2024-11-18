<?php
session_start();

$msg = "";

$host = "localhost";
$user = "root";
$password = "";
$database = "enlightened";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM useraccounts WHERE UserEmail = ? AND UserPassword = ?";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    $total = $result->num_rows;

    if ($total == 1) {
    $row = $result->fetch_assoc(); // Get user details from the result
    $_SESSION['username'] = $row['UserName']; // Store username in session
    header("Location: dashboard.php");
    } else {
    $msg = "Email or password is incorrect";
    }

    if($email == "admin@gmail.com" and $password == "admin"){
        header("Location: admin.php");
    }

    $stmt->close();
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EdulightenED HUB - Signin page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" integrity="sha512-OQDNdI5rpnZ0BRhhJc+btbbtnxaj+LdQFeh0V9/igiEPDiWE2fG+ZsXl0JEH+bjXKPJ3zcXqNyP4/F/NegVdZg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="https://i.postimg.cc/3YKB7zp0/favicon.png" type="image/x-icon">
    <style>
        /* CSS boilerplate */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html, body {
            height: 100%;
            width: 100%;
            font-family: "Poppins", sans-serif;
            overflow: hidden;
        }
        
    </style>
</head>
<body>
    <div class="main" style="height: 100vh; width: 100vw; display: flex;">
        <form action="Signin_page.php" method="POST" style="height:100%; width:40%;">
        <div class="left" style="height: 100%; width: 100%;   display: flex; flex-direction: column; gap: 15px; padding: 105px; justify-content: center; position: relative;">
            <a href="homepage.php" style="text-decoration: none;"><p style="width:fit-content; font-weight: 600; background-color: #6255a5; color: white; padding: 6px 10px; border-radius: 100px; transition: .3s ease;"><i class="ri-arrow-left-line"></i></p></a>
            <p style="font-size: 25px; font-weight: 600; width: 70%;">Welcome to EdulightenED HUB</p>
            <p style="font-weight: 500; font-size: 12px; color: gray;">Enjoy ultimate learning experience</p>
            <input name="email" style="width: 75%; padding: 8px 12px; border-radius: 5px; border: 2px solid rgb(224, 224, 224);" type="email" placeholder="Enter your mail">
            <input name="password" style="width: 75%; padding: 8px 12px; border-radius: 5px; border: 2px solid rgb(224,224,224);" type="password" placeholder="password">
            <input name="submit" style="width: 75%; padding: 8px 12px; border-radius: 5px; border: 2px solid #6255a5; background-color: #6255a5; font-weight: 600; cursor: pointer; color: white;" type="submit" value="Sign in">
            <p style="padding:5px; font-weight:600; font-size: 12px;"><?php echo $msg; ?></p>
            <p style="font-size: 12px; position: absolute; bottom: 5%; font-weight: 600;">Don't have an account? <span><a href="Signup_page.php" style="color: #6255a5; font-weight: 600;">Join now</a></span></p>
        </div>
        </form>
        <div class="right" style="height: 100%; width: 60%; background-image: url(https://i.postimg.cc/Gd2PRYLc/Login-Banner.png); background-position: center; background-size: cover;"></div>
        
    </div>
</body>
</html>