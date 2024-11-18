<?php
session_start();

if (!isset($_SESSION['username'])) {
    // header("Location: Signin_page.php");
    exit;
}

// Clear the cookie
setcookie('all_courses', '', time() - 3600, '/');
echo "Cart emptied";
?>
