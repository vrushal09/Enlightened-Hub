<?php
session_start();
include 'dashboard_data.php';

if (!isset($_SESSION['username'])) {
    header("Location: Signin_page.php");
    exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$database = "enlightened";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$course_ids = "";

if (isset($_COOKIE['all_courses'])) {
    $old_cookie = json_decode($_COOKIE['all_courses']);
    if (!empty($old_cookie)) {
        $course_ids = implode(',', $old_cookie);
        $sql = "SELECT * FROM courses WHERE c_id IN ($course_ids)";
        $result = $conn->query($sql);
    }
}

$print_user = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>EdulightenED HUB - My course</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        function removeCourse(courseId) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    location.reload();
                }
            };
            xhr.open("POST", "remove_course.php", true); // Assuming remove_course.php handles individual course removal
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send("course_id=" + courseId);
        }

        function emptyCart() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    location.reload();
                }
            };
            xhr.open("POST", "empty_cart.php", true);
            xhr.send();
        }

        document.addEventListener("DOMContentLoaded", function() {
            var removeButtons = document.querySelectorAll(".remove-course");
            removeButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    var courseId = this.getAttribute("data-course-id");
                    removeCourse(courseId);
                });
            });

            var emptyCartButton = document.getElementById("empty-cart");
            if (emptyCartButton) {
                emptyCartButton.addEventListener("click", function() {
                    emptyCart();
                });
            }
        });
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="https://i.postimg.cc/3YKB7zp0/favicon.png" type="image/x-icon">

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
            
        }

        #menu_item {
            border: 2px solid rgb(229, 229, 247);
            border-radius: 10px;
            padding: 8px;
            transition: .3s ease;
        }

        #menu_item:hover {
            background-color: white;
            border: 2px solid white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.103);
        }

        #icns {
            background-color: #dfdffc;
            color: #6255a5;
            padding: 5px;
            margin: 5px;
            border-radius: 100px;
            transition: .3s ease;
            font-weight: 100; 
        }

        #menu_item:hover #icns {
            color: white;
            background-color: #6255a5;
            font-weight: 100;
        }

        .main {
            overflow-x: hidden;
        }

        .col-2 {
            overflow-y: auto;
        }

        .empty-cart-btn {
            display: inline-block;
            padding: 10px 20px;
            margin-bottom: 20px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
        }
    </style>
</head>
<body>

    <div class="main" style="height: 100vh; width: 100vw; display: flex;">
        <div id="col-1" class="menu" style="width: 15%; height: 100%; display: flex; flex-direction: column; padding: 25px; position: relative; background-color: #f6f5fa; position: fixed;">
            <div class="logo">
                <img style="width: 120px; padding-top: 5px;" src="https://i.postimg.cc/QxgWQ2h2/Logo-BG-2.png">
            </div>
            <div class="pages" style="padding-top: 50px; font-size: 14px; display: flex; flex-direction: column; gap: 8px;">
                <p style="font-size: 12px; color: gray; font-weight: 600; padding-left: 3px;">Menu</p>
                <p id="menu_item"><i id="icns" class="ri-layout-4-line"></i> <a style="color: black; text-decoration: none; font-weight: 500;" href="dashboard.php">Dashboard</a></p>
                <p id="menu_item"><i id="icns" class="ri-graduation-cap-line"></i></i> <a style="color: black; text-decoration: none; font-weight: 500;" href="mycourse.php">My course</a></p>
                </div>
                <div class="profile" style="display: flex; position: absolute; bottom: 3%; border-top: 2px solid rgb(229, 229, 229); padding-top: 20px; gap: 8px;">
                <div class="profile" style="height: 40px; width: 40px; background-color: aqua; border-radius: 100px; background-image: url('https://plus.unsplash.com/premium_photo-1687832783818-8857f0c07ea4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-position: center; background-size: cover;"></div>
                <div style="padding-top: 3px;">
                    <p style="font-size: 14px; font-weight: 600;">
                        <?php echo $print_user; ?>
                    </p>
                    <a href="homepage.php" style="text-decoration: none;">
                        <p style="font-size: 10px; font-weight: 600; color: rgb(177, 20, 20);"> Log out</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="gap w-[15%] h-[100%]"></div>
        <div class="col-2" style="width: 100%; padding: 55px 85px;">
            <button onclick="alert('courses removed')" id="empty-cart" class="empty-cart-btn bg-[#FF7373] font-[500] p-[8px 15px] rounded-[25px]"><i class="ri-delete-bin-6-line"></i> Empty Cart</button>
            <div class="grid-rows-4 grid-cols-5 overflow-y-auto" style="display: grid; gap: 15px; overflow-x:hidden;">
                <?php
                if (!isset($_COOKIE['all_courses']) || empty($course_ids)) {
                    echo '<h1 style="color:gray; width:120%; font-size:14px;">" Add your favorite courses here "</h1>';
                } else {
                    if ($result && $result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '
                                <div class="course_card" style="background-color: #f6f5fa; height: 300px;width: 250px; border-radius: 20px; overflow: hidden; display: flex; flex-direction: column;">
                                    <div class="img">
                                        <img style="height: 100%; width: 100%; background-color: #3e3862; background-position: center; background-size: cover;" src="' . $row["course_image_url"] . '">
                                    </div>
                                    <div class="txt" style="height: 50%; width: 100%; padding: 15px; display: flex; flex-direction: column; gap: 8px;">
                                        <p style="color: #6255a5; font-size: 11px; font-weight: 600;">' . $row["course_cat"] . '</p>
                                        <p style="font-size: 15px; font-weight: 600;">' . $row["course_name"] . '</p>
                                        <a href="viewcourse.php?c_id=' . $row["c_id"] . '&course_name=' . urlencode($row["course_name"]) . '&course_cat=' . urlencode($row["course_cat"]) . '" style="text-decoration: none;">
                                            <p style="font-size:12px; background-color: #6255a5; padding: 5px 10px; border-radius: 10px; background-color: #6255a5; color: #f6f5fa; width: fit-content;">View course</p>
                                        </a>
                                    </div>
                                </div>
                            ';
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
