<?php
session_start();
// Check if a user is logged in

// Database connection parameters
$servername_name = "localhost";
$username_name = "root";
$password_name = "";
$database_name = "enlightened";

// Create connection
$conn_name = new mysqli($servername_name, $username_name, $password_name, $database_name);

// Check connection
if ($conn_name->connect_error) {
    die("Connection failed: " . $conn_name->connect_error);
}

// Retrieve course details from parameters
$c_id = $_GET['c_id'];
$course_name = $_GET['course_name'];
$course_cat = $_GET['course_cat'];

// Use these parameters to fetch additional course details from the database
$sql = "SELECT * FROM courses WHERE c_id = '$c_id'";
$result = $conn_name->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        // Now you can display the course details retrieved from the database
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>View Course - ' . $course_name . '</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" integrity="sha512-OQDNdI5rpnZ0BRhhJc+btbbtnxaj+LdQFeh0V9/igiEPDiWE2fG+ZsXl0JEH+bjXKPJ3zcXqNyP4/F/NegVdZg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <!-- Include CSS and other necessary files -->
            <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            html, body {
                height: 100%;
                width: 100%;
                font-family: "Poppins", sans-serif;
                
                scroll-behavior: smooth;
            }
            </style>
        </head>
        <body>
            <div class="main" style="height: 100vh; width: 100vw;">
                <div class="nav" style="height: 10%; width: 100%; display: flex; align-items: center; justify-content: space-between; padding:0px 55px;">
                    <div class="logo">
                        <img style="width: 140px; padding-top: 5px;" src="https://i.postimg.cc/PJcp7x3C/Logo.png">
                    </div>
                    <a href="mycourse.php" style="text-decoration: none;">
                        <p style="font-weight: 600; background-color: #6255a5; color: white; padding: 6px 10px; border-radius: 100px; transition: .3s ease;">
                            <i class="ri-arrow-left-line"></i>
                        </p>
                    </a>

                </div>
                <div class="course" style="height: 90%; width: 100%; display: flex; padding: 0px 55px;">
                    <div class="left" style="height: 100%; width: 50%; gap: 25px; display: flex; flex-direction: column; justify-content: center; padding-left:55px;">
                        <p style="font-size: 45px; font-weight: 600; width: 70%;  line-height: 120%;">' . $row["course_name"] . '</p> <!-- course name -->
                        <p style="color: #6255a5; font-weight: 500; ">' . $row["course_cat"] . '</p>
                        <p style="cursor: pointer; background-color: #6255a5; color: white; font-weight: 600; padding: 8px 15px; border-radius: 10px; font-size: 18px; width: fit-content;">Start learning</p>
                        <div style="display: flex; flex-direction: column; gap: 15px;">
                            <p style="padding-top: 10px; font-weight: 600;"><i class="ri-user-3-line" style="color: #6255a5; padding-right: 15px;"></i>Tutor : <span style="color:#6255a5" >' . $row["tutor_name"] . '</span></p>
                            <p style="font-weight: 600;"><i class="ri-speak-line" style="color: #6255a5; padding-right: 15px;"></i>Language : <span style="color:#6255a5" >' . $row["language"] . '</span></p>
                            <p style="font-weight: 600;"><i class="ri-time-line" style="color: #6255a5; padding-right: 15px;"></i>Duration : <span style="color:#6255a5" >' . $row["duration"] . '</span></p>
                            <p style="font-weight: 600;"><i class="ri-calendar-line" style="color: #6255a5; padding-right: 15px;"></i>Release Date : <span style="color:#6255a5" >' . $row["release_date"] . '</span></p>
                        </div>
                    </div>
                    <div class="right" style="height: 70%; width: 50%; display: flex; align-items: center; border-radius: 25px; overflow: hidden; margin-top:100px; flex-direction:column">
                    <p style="margin:15px; font-size:12px;">This is just introduction of coures full course will be realed on its realse date</p>
                        <div class="video" style="height: 90%; width: 100%;">
                            <iframe src='.$row['video_url'].' style="width: 100%; height: 100%; border:0px; border-radius: 25px;"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        </html>';
    }
} else {
    echo "0 results";
}

$conn_name->close();
?>
