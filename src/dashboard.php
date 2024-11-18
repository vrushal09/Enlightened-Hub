<?php
session_start();
// Include dashboard_data.php (assuming it retrieves data based on user)
include 'dashboard_data.php';

// Check if a user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: Signin_page.php"); // Redirect to login if not logged in
    exit;
}

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

// Retrieve username from session
$print_user = $_SESSION['username'];

if (isset($_GET['course_added']) && $_GET['course_added'] === 'true') {
    echo '<script>alert("Course Added");</script>';
}

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" integrity="sha512-OQDNdI5rpnZ0BRhhJc+btbbtnxaj+LdQFeh0V9/igiEPDiWE2fG+ZsXl0JEH+bjXKPJ3zcXqNyP4/F/NegVdZg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>EdulightenED HUB - Dashboard</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
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
            }

            #menu_item{border: 2px solid rgb(229, 229, 247); border-radius: 10px; padding: 8px; transition: .3s ease;}
            #menu_item:hover{background-color: white; border: 2px solid white; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.103);}

            #icns{
                background-color: #dfdffc; color: #6255a5; padding: 5px; margin: 5px; border-radius: 100px; transition: .3s ease; font-weight: 100; 
            }
            #menu_item:hover #icns{
                color: white;
                background-color: #6255a5;
                font-weight: 100;
            }
            .main{
                overflow-x: hidden;
            }
            .col-2{
                overflow-y: auto;
            }
            #final_btn{font-size: 12px;}

        </style> 
    </head>
    <body>
    <div class="main" style="height: 100vh; width: 100vw; display: flex;">
                        <div id="col-1" class="menu" style="width: 15%; height: 100%; display: flex; flex-direction: column; padding: 25px; position: relative; background-color: #f6f5fa;">    
                            <div class="logo">
                                <img style="width: 120px; padding-top: 5px;" src="https://i.postimg.cc/QxgWQ2h2/Logo-BG-2.png">
                            </div>
                            <div class="pages" style="padding-top: 50px; font-size: 14px; display: flex; flex-direction: column; gap: 8px;">
                                <p style="font-size: 12px; color: gray; font-weight: 600; padding-left: 3px;">Menu</p>
                                <p id="menu_item"><i id="icns" class="ri-layout-4-line"></i> <a style="color: black; text-decoration: none; font-weight: 500;" href="dashboard.php">Dashboard</a></p>
                                <p id="menu_item"><i id="icns" class="ri-graduation-cap-line"></i></i> <a style="color: black; text-decoration: none; font-weight: 500;" href="mycourse.php">My course</a></p>
                            </div>
                            <div class="profile" style="display: flex; position: absolute; bottom: 3%; border-top: 2px solid rgb(229, 229, 229); padding-top: 20px; gap: 8px;">
                                <div class="profile" style="height: 40px; width: 40px; background-color: aqua; border-radius: 100px; background-image: url(https://plus.unsplash.com/premium_photo-1687832783818-8857f0c07ea4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D); background-position: center; background-size: cover;"></div>
                                <div style="padding-top: 3px;">
                                    <p style="font-size: 14px; font-weight: 600;">
                                        <?php
                                        echo $print_user;
                                        ?>
                                    </p>
                                    <a href="homepage.php" style="text-decoration: none;"><p style="font-size: 10px; font-weight: 600; color: rgb(177, 20, 20);"> Log out</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-2" style="display: flex; flex-direction: column; align-items: center; ">
                            <div class="new_released" style="height: 65%; width: 100%; background-color: rgb(255, 255, 255); padding: 55px;">
                                <p style="font-size: 18px; font-weight: 600;">💎 Premium and Trending <br> Courses just for you</p>
                                <div class="cards" style="display: flex; align-items: center; justify-content: center; height: 90%; width: 100%; padding-top: 25px;">
                                    <div class="course_cards" style="height: 100%; width: 100%; display: flex;  align-items: center; justify-content: center; gap: 20px">
                                        <div class="course_card" style="background-color: #f6f5fa; height: 300px; width: 250px; border-radius: 20px; overflow: hidden; display: flex; flex-direction: column;">
                                            <div class="img" style="height: 50%; width: 100%; background-color: #3e3862; background-image: url(https://i.ytimg.com/vi/qvQie2QP5Vg/maxresdefault.jpg); background-position: center; background-size: cover;">
                                                
                                            </div>
                                            <div class="txt" style="height: 50%; width: 100%; padding: 15px; display: flex; flex-direction: column; gap: 8px;">
                                                <p style="color: #6255a5; font-size: 11px; font-weight: 600;">Design</p>
                                                <p style="font-size: 15px; font-weight: 600;">Photoshop beginer to advance full course</p>
                                                <p style="background-color: #6255a5; padding: 5px 10px; border-radius: 10px; background-color: #6255a5; color: #f6f5fa; width: fit-content; cursor: not-allowed! important; font-size:12px; " >Coming soon.</p>
                                            </div>
                                        </div>
                                        <div class="course_card" style="background-color: #f6f5fa; height: 300px; width: 250px; border-radius: 20px; overflow: hidden; display: flex; flex-direction: column;">
                                            <div class="img" style="height: 50%; width: 100%; background-color: #3e3862; background-image: url(https://i.ytimg.com/vi/ACpccLvp4pY/maxresdefault.jpg); background-position: center; background-size: cover;">
                                                
                                            </div>
                                            <div class="txt" style="height: 50%; width: 100%; padding: 15px; display: flex; flex-direction: column; gap: 8px;">
                                                <p style="color: #6255a5; font-size: 11px; font-weight: 600;">Design</p>
                                                <p style="font-size: 15px; font-weight: 600;">After effects beginer to advance full course</p>
                                                <p style="background-color: #6255a5; padding: 5px 10px; border-radius: 10px; background-color: #6255a5; color: #f6f5fa; width: fit-content; cursor: not-allowed! important; font-size:12px; " >Coming soon.</p>
                                            </div>
                                        </div>
                                        <div class="course_card" style="background-color: #f6f5fa; height: 300px; width: 250px; border-radius: 20px; overflow: hidden; display: flex; flex-direction: column;">
                                            <div class="img" style="height: 50%; width: 100%; background-color: #3e3862; background-image: url(https://miro.medium.com/v2/0*L_DMwouZ7IYE9PqA); background-position: center; background-size: cover;">
                                                
                                            </div>
                                            <div class="txt" style="height: 50%; width: 100%; padding: 15px; display: flex; flex-direction: column; gap: 8px;">
                                                <p style="color: #6255a5; font-size: 11px; font-weight: 600;">Design</p>
                                                <p style="font-size: 15px; font-weight: 600;">Figma beginer to advance full course</p>
                                                <p style="background-color: #6255a5; padding: 5px 10px; border-radius: 10px; background-color: #6255a5; color: #f6f5fa; width: fit-content; cursor: not-allowed! important; font-size:12px; " >Coming soon.</p>
                                            </div>
                                        </div>
                                        <div class="course_card" style="background-color: #f6f5fa; height: 300px; width: 250px; border-radius: 20px; overflow: hidden; display: flex; flex-direction: column;">
                                            <div class="img" style="height: 50%; width: 100%; background-color: #3e3862; background-image: url(https://www.cdmi.in/courses@2x/python-training-institute.webp); background-position: center; background-size: cover;">
                                                
                                            </div>
                                            <div class="txt" style="height: 50%; width: 100%; padding: 15px; display: flex; flex-direction: column; gap: 8px;">
                                                <p style="color: #6255a5; font-size: 11px; font-weight: 600;">Programming</p>
                                                <p style="font-size: 15px; font-weight: 600;">Python beginer to advance full course</p>
                                                <p style="background-color: #6255a5; padding: 5px 10px; border-radius: 10px; background-color: #6255a5; color: white; width: fit-content; cursor: not-allowed! important; font-size:12px; " >Coming soon.</p>
                                            </div>
                                        </div>
                                        <div class="course_card" style="background-color: #f6f5fa; height: 300px; width: 250px; border-radius: 20px; overflow: hidden; display: flex; flex-direction: column;">
                                            <div class="img" style="height: 50%; width: 100%; background-color: #3e3862; background-image: url(https://data-flair.training/wp-content/uploads/2023/06/free-java-certification-course-thumbnail-hindi.webp); background-position: center; background-size: cover;">
                                                
                                            </div>
                                            <div class="txt" style="height: 50%; width: 100%; padding: 15px; display: flex; flex-direction: column; gap: 8px;">
                                                <p style="color: #6255a5; font-size: 11px; font-weight: 600;">Programming</p>
                                                <p style="font-size: 15px; font-weight: 600;">JAVA beginer to advance full course</p>
                                                <p style="background-color: #6255a5; padding: 5px 10px; border-radius: 10px; background-color: #6255a5; color: white; width: fit-content; cursor: not-allowed! important; font-size:12px; " >Coming soon.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="border" style="padding-top: 30px; width: 90%; border-bottom: 2px solid rgb(234, 234, 234);"></div>
                                
                                <div class="course" style="height: 235%; width: 100%; padding: 55px;">
                                    <p style="font-size: 18px; font-weight: 600;">Explore our ever expanding <br> library of knowledge</p>
                                    <p style="font-weight: 600; color: #6255a5; font-size: 12px; padding-top: 35px;">courses on programming</p>
                                        <div class="cards" style=" display: flex;  height: fit-content; width: 100%; padding-top: 10px;gap: 10px;">

                                            <?php 
                                            // Step 3: Iterate over the results and display them
                                            if ($result_pro->num_rows > 0) {
                                                while($row = $result_pro->fetch_assoc()) {
                                                    echo '<div class="course_cards" style="height: 100%; width: 100%; display: flex; gap:25px;">
                                                            <div class="course_card" style="background-color: #f6f5fa; height: 300px;width: 250px; border-radius: 20px; overflow: hidden; display: flex; flex-direction: column;">
                                                                <div class="img"><img style="height: 100%; width: 100%; background-color: #3e3862; ; background-position: center; background-size: cover;" src="' . $row["course_image_url"] . '">
                                                                </div>
                                                                <div class="txt" style="height: 50%; width: 100%; padding: 15px; display: flex; flex-direction: column; gap: 8px;">
                                                                    <p style="color: #6255a5; font-size: 11px; font-weight: 600;">'.  $row["course_cat"].  '</p>
                                                                    <p style="font-size: 15px; font-weight: 600;">'.  $row["course_name"].  '</p>
                                                                    <form action="addtomycourse.php">
                                                                        <input type="hidden" name="c_id" value=' . $row["c_id"] . ' />
                                                                        <input style="cursor:pointer; border:0px; background-color: #6255a5; padding: 8px 10px; border-radius: 10px; background-color: #6255a5; color: #f6f5fa; width: fit-content;" type="submit" value="Add to My course"/>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>';
                                                                }
                                                            } else {
                                                                echo "0 results";
                                                            }
                                                            $conn->close();
                                            ?>
                                        </div>
                                    
                                        <p style="font-weight: 600; color: #6255a5; font-size: 12px; padding-top: 35px;">courses on marketing</p>
                                        <div class="cards" style=" display: flex;  height: fit-content; width: 100%; padding-top: 10px;gap: 10px;">
                                            <?php 
                                            // Step 3: Iterate over the results and display them
                                            if ($result_mark->num_rows > 0) {
                                                while($row = $result_mark->fetch_assoc()) {
                                                    echo '<div class="course_cards" style="height: 100%; width: 100%; display: flex; gap:25px;">
                                                    <div class="course_card" style="background-color: #f6f5fa; height: 300px;width: 250px; border-radius: 20px; overflow: hidden; display: flex; flex-direction: column;">
                                                        <div class="img"><img style="height: 100%; width: 100%; background-color: #3e3862; ; background-position: center; background-size: cover;" src="' . $row["course_image_url"] . '">
                                                        </div>
                                                        <div class="txt" style="height: 50%; width: 100%; padding: 15px; display: flex; flex-direction: column; gap: 8px;">
                                                            <p style="color: #6255a5; font-size: 11px; font-weight: 600;">'.  $row["course_cat"].  '</p>
                                                            <p style="font-size: 15px; font-weight: 600;">'.  $row["course_name"].  '</p>
                                                                    <form action="addtomycourse.php">
                                                                        <input type="hidden" name="c_id" value=' . $row["c_id"] . ' />
                                                                        <input style="cursor:pointer; border:0px; background-color: #6255a5; padding: 8px 10px; border-radius: 10px; background-color: #6255a5; color: #f6f5fa; width: fit-content;" type="submit" value="Add to My course"/>
                                                                    </form>
                                                        </div>
                                                    </div>
                                                </div>';
                                                                }
                                                            } else {
                                                                echo "0 results";
                                                            }
                                                            $conn1->close();
                                            ?>
                                        </div>

                                        <p style="font-weight: 600; color: #6255a5; font-size: 12px; padding-top: 35px;">courses on designing</p>

                                        <div class="cards" style=" display: flex;  height: fit-content; width: 100%; padding-top: 10px;gap: 10px;">

                                        <?php 
                                            // Step 3: Iterate over the results and display them
                                            if ($result_des->num_rows > 0) {
                                                while($row = $result_des->fetch_assoc()) {
                                                    echo '<div class="course_cards" style="height: 100%; width: 100%; display: flex; gap:25px;">
                                                            <div class="course_card" style="background-color: #f6f5fa; height: 300px;width: 250px; border-radius: 20px; overflow: hidden; display: flex; flex-direction: column;">
                                                                <div class="img"><img style="height: 100%; width: 100%; background-color: #3e3862; ; background-position: center; background-size: cover;" src="' . $row["course_image_url"] . '">
                                                                </div>
                                                                <div class="txt" style="height: 50%; width: 100%; padding: 15px; display: flex; flex-direction: column; gap: 8px;">
                                                                    <p style="color: #6255a5; font-size: 11px; font-weight: 600;">'.  $row["course_cat"].  '</p>
                                                                    <p style="font-size: 15px; font-weight: 600;">'.  $row["course_name"].  '</p>

                                                                    <form action="addtomycourse.php">
                                                                        <input type="hidden" name="c_id" value=' . $row["c_id"] . ' />
                                                                        <input style="cursor:pointer; border:0px; background-color: #6255a5; padding: 8px 10px; border-radius: 10px; background-color: #6255a5; color: #f6f5fa; width: fit-content;" type="submit" value="Add to My course"/>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>';
                                                                }
                                                            } else {
                                                                echo "0 results";
                                                            }
                                                            $conn2->close();
                                            ?>
                                        </div>

                                        <p style="font-weight: 600; color: #6255a5; font-size: 12px; padding-top: 35px;">courses on painting</p>

                                        <div class="cards" style=" display: flex;  height: fit-content; width: 100%; padding-top: 10px;gap: 10px;">

                                            <?php 
                                            // Step 3: Iterate over the results and display them
                                            if ($result_paint->num_rows > 0) {
                                                while($row = $result_paint->fetch_assoc()) {
                                                    echo '<div class="course_cards" style="height: 100%; width: 100%; display: flex; gap:25px;">
                                                            <div class="course_card" style="background-color: #f6f5fa; height: 300px;width: 250px; border-radius: 20px; overflow: hidden; display: flex; flex-direction: column;">
                                                                <div class="img"><img style="height: 100%; width: 100%; background-color: #3e3862; ; background-position: center; background-size: cover;" src="' . $row["course_image_url"] . '">
                                                                </div>
                                                                <div class="txt" style="height: 50%; width: 100%; padding: 15px; display: flex; flex-direction: column; gap: 8px;">
                                                                    <p style="color: #6255a5; font-size: 11px; font-weight: 600;">'.  $row["course_cat"].  '</p>
                                                                    <p style="font-size: 15px; font-weight: 600;">'.  $row["course_name"].  '</p>
                                                                    
                                                                    <form action="addtomycourse.php">
                                                                        <input type="hidden" name="c_id" value=' . $row["c_id"] . ' />
                                                                        <input style="cursor:pointer; border:0px; background-color: #6255a5; padding: 8px 10px; border-radius: 10px; background-color: #6255a5; color: #f6f5fa; width: fit-content;" type="submit" value="Add to My course"/>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>';
                                                                }
                                                            } else {
                                                                echo "0 results";
                                                            }
                                                            $conn3->close();
                                            ?>
                                        </div>
                                        
                                </div>
                                <p style="margin-bottom: 35px; font-size:15px;">More courses will be added soon...😊</p>
                        </div>
    </div>
    </body>
    </html>

