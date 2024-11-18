<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EdulightenED HUB - Home page</title>

    <!-- icon link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" integrity="sha512-OQDNdI5rpnZ0BRhhJc+btbbtnxaj+LdQFeh0V9/igiEPDiWE2fG+ZsXl0JEH+bjXKPJ3zcXqNyP4/F/NegVdZg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="https://i.postimg.cc/3YKB7zp0/favicon.png" type="image/x-icon"> <!-- icon link -->

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
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        .btns{
            background-color: #6255a5; padding: 8px 20px; border-radius: 100px; transition: .2s ease;
        }
        .btns:hover{
            background-color: #554c86;
        }
        .btns:active{
            background-color: #3e3862;
        }

        .card{
            height: 65px; width: 350px; border-radius: 15px; border: 2px solid rgb(229, 229, 247); padding: 10px; display: flex; gap: 10px; transition: .3s ease;
        }
        #icns{
            background-color: #dfdffc; color: #6255a5; padding: 10px; border-radius: 100px; transition: .3s ease;
        }
        .card:hover #icns{
            color: white;
            background-color: #6255a5;
        }
        .card:hover{
            background-color: white; border: 2px solid white; box-shadow: 0px 0px 25px #6255a523;
        }

        .card2{
            height: 200px; width: 200px; border: 2px solid rgb(229, 229, 247); border-radius: 15px; display: flex; flex-direction: column; padding: 15px; justify-content: space-between; transition: .3s ease;
        }
        .card2:hover{
            background-color: white; border: 2px solid white; box-shadow: 0px 0px 25px #6255a523;
        }
        #icns2{
            background-color: #dfdffc; height: fit-content; width: fit-content; padding: 9px; border-radius: 100px; color: #6255a5; transition: .3s ease;
        }
        .card2:hover #icns2{
            color: white;
            background-color: #6255a5;
        }
    </style>

</head>
<body>
    <div id="page1" class="page1" style="height: 100vh; width: 100vw; ">
        <div class="nav fade-in-top" style="height: 10%; width: 100%; display: flex; align-items: center; justify-content: space-between; font-size: 12px; padding: 0px 45px;">
            <div class="logo">
                <img style="width: 120px; padding-top: 5px;" src="https://i.postimg.cc/PJcp7x3C/Logo.png">
            </div>
            <div class="pages" style="display: flex; gap: 35px;">
                <a style="color: black; text-decoration: none; font-weight: 500;" href="#page1"><p>Home</p></a>
                <a style="color: black; text-decoration: none; font-weight: 500;" href="#page2"><p>Catagories</p></a>
                <a style="color: black; text-decoration: none; font-weight: 500;" href="#page3"><p>Courses</p></a>
                <a style="color: black; text-decoration: none; font-weight: 500;" href="#page4"><p>Why choose us?</p></a>
                <a style="color: black; text-decoration: none; font-weight: 500;" href="contact_us.php"><p>Contact Us</p></a>
            </div>
            <div class="btns">
                <a style="color: rgb(255, 255, 255); text-decoration: none; font-weight: 500;" href="Signin_page.php"><p>Sign in</p></a>
            </div>
        </div>

        <div class="banner" style="height: 5%; width: 100%; background-color: black; background-image: url(https://i.postimg.cc/Q8Jg8JKM/banner.png); background-size: cover; background-position: center;"> </div>

        <div class="main_sec" style="height: 85%; width: 100%; display: flex;">
            <div class="left fade-in-left" style="height: 100%; width: 45%; display: flex; flex-direction: column; gap: 35px; padding: 105px 60px;">
                <p style="font-size: 45px; font-weight: 600; width: 80%;">Learn anything to improve your skill</p>
                <p style="font-size: 13px; color: gray; width:80%;">Enlightened Hub is an online platform learning site that provides tens of thousands of classes with experinced instructors.</p>
                <div style="display: flex; gap: 25px;">
                    <a href="Signin_page.php" style="text-decoration: none;"><p class="btns" style="color: white; width: fit-content; font-size: 13px; cursor: pointer;">Get started</p></a>
                    <p style="font-weight: 600; padding-top: 8px; cursor: pointer; color: rgb(79, 79, 79);"> <i class="ri-play-large-fill"></i> learn more</p>
                </div>
            </div>
            <div class="right fade-in-right" style="height: 100%; width: 55%; background-color: rgb(211, 169, 251); background-image: url(https://i.postimg.cc/7DX1jXys/Big-banner-png.png); background-size: cover; background-position: center;"></div>
        </div>
    </div>

    <div id="page2" class="page2" style="height: 55vh; width: 100vw; background-color: #f6f5fa; display: flex; flex-direction: column; align-items: center; justify-content: center;">
        <p style="font-weight: 500; padding-bottom: 10px; color: #6255a5;">Trending Course category</p>
        <p style="font-weight: 600; font-size: 30px; padding-bottom: 35px;">Top category we have</p>
        <div class="cards" style="display: flex; flex-direction: column; gap: 15px;">
            <div class="row1" style="display: flex; gap: 50px;">
                <div class="card">
                    <div class="icon" style="padding-top: 9px;">
                        <i id="icns"class="ri-boxing-line"></i>
                    </div>
                    <div class="txtx">
                        <p style="font-weight: 500;">Personal Devlopment</p>
                        <p style="font-size: 11px; color: gray;">320+ Courses</p>
                    </div>
                </div>
                <div class="card">
                    <div class="icon" style="padding-top: 9px;">
                        <i id="icns"class="ri-layout-2-line"></i>
                    </div>
                    <div class="txtx">
                        <p style="font-weight: 500;">Graphic Design</p>
                        <p style="font-size: 11px; color: gray;">469+ Courses</p>
                    </div>
                </div>
                <div class="card">
                    <div class="icon" style="padding-top: 9px;">
                        <i id="icns"class="ri-macbook-line"></i>
                    </div>
                    <div class="txtx">
                        <p style="font-weight: 500;">IT Software & Computers</p>
                        <p style="font-size: 11px; color: gray;">412+ Courses</p>
                    </div>
                </div>
            </div>
            <div class="row2" style="display: flex; gap: 50px;">
                <div class="card">
                    <div class="icon" style="padding-top: 9px;">
                        <i id="icns"class="ri-pie-chart-line"></i>
                    </div>
                    <div class="txtx">
                        <p style="font-weight: 500;">Digital Marketing</p>
                        <p style="font-size: 11px; color: gray;">180+ Courses</p>
                    </div>
                </div>
                <div class="card">
                    <div class="icon" style="padding-top: 9px;">
                        <i id="icns"class="ri-camera-line"></i>
                    </div>
                    <div class="txtx">
                        <p style="font-weight: 500;">Photography & Videography</p>
                        <p style="font-size: 11px; color: gray;">890+ Courses</p>
                    </div>
                </div>
                <div class="card">
                    <div class="icon" style="padding-top: 9px;">
                        <i id="icns"class="ri-user-heart-line"></i>
                    </div>
                    <div class="txtx">
                        <p style="font-weight: 500;">Lifestyle</p>
                        <p style="font-size: 11px; color: gray;">322+ Courses</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <div id="page3" style="height: 70vh; width: 100vw; background-color: #ffffff; display: flex; flex-direction: column; padding: 25px 55px; gap: 20px;">
        <div class="nav" style="height: 20%; width: 100%; display: flex; align-items: center; justify-content: center; gap: 25px;">
            <div class="tab1" style="height: 70%; width: fit-content; background-color: white; border-radius: 15px; box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.056); display: flex; align-items: center; padding: 0px 10px; font-size: 14px; gap: 15px;">
                <p style="font-weight: 600; ">Top Courses from top instructors from best universities of world</p>
                <a href="Signin_page.php" style="text-decoration: none;"><p style="background-color: #6255a5; padding: 8px 15px; color: white; font-weight: 400; border-radius: 10px; cursor: pointer;">join now</p></a>
            </div>
            <div class="tab2" style="height: 70%; width: fit-content; background-color: white; border-radius: 15px; box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.056); display: flex; align-items: center; padding: 0px 20px; font-size: 14px; gap: 5px;">
                <i class="ri-eye-line"></i> 
                <select style="background-color: transparent; border: 0; font-weight: 600;">
                    <option value="">Popular</option>
                    <option value="">Latest Realese</option>
                    <option value="">Highest Rated</option>
                </select>
                
            </div>
        </div>
        <div class="course_cards" style="height: 80%; width: 100%; display: flex;  align-items: center; justify-content: center; gap: 25px;">
            <div class="course_card" style="background-color: #f6f5fa; height: 300px; width: 250px; border-radius: 20px; overflow: hidden; display: flex; flex-direction: column;">
                <div class="img" style="height: 50%; width: 100%; background-color: #3e3862; background-image: url(https://i.ytimg.com/vi/qvQie2QP5Vg/maxresdefault.jpg); background-position: center; background-size: cover;">
                    
                </div>
                <div class="txt" style="height: 50%; width: 100%; padding: 15px; display: flex; flex-direction: column; gap: 8px;">
                    <p style="color: #6255a5; font-size: 11px; font-weight: 600;">Design</p>
                    <p style="font-size: 15px; font-weight: 600;">Adobe photoshop beginer to advance full course</p>
                    <a href="Signin_page.php" style="text-decoration: none;"><p style="background-color: #6255a5; padding: 5px 10px; border-radius: 10px; background-color: #6255a5; color: #f6f5fa; width: fit-content;">checkout</p></a>
                </div>
            </div>
            <div class="course_card" style="background-color: #f6f5fa; height: 300px; width: 250px; border-radius: 20px; overflow: hidden; display: flex; flex-direction: column;">
                <div class="img" style="height: 50%; width: 100%; background-color: #3e3862; background-image: url(https://i.ytimg.com/vi/ACpccLvp4pY/maxresdefault.jpg); background-position: center; background-size: cover;">
                    
                </div>
                <div class="txt" style="height: 50%; width: 100%; padding: 15px; display: flex; flex-direction: column; gap: 8px;">
                    <p style="color: #6255a5; font-size: 11px; font-weight: 600;">Design</p>
                    <p style="font-size: 15px; font-weight: 600;">Adobe After effects beginer to advance full course</p>
                    <a href="Signin_page.php" style="text-decoration: none;"><p style="background-color: #6255a5; padding: 5px 10px; border-radius: 10px; background-color: #6255a5; color: #f6f5fa; width: fit-content;">checkout</p></a>
                </div>
            </div>
            <div class="course_card" style="background-color: #f6f5fa; height: 300px; width: 250px; border-radius: 20px; overflow: hidden; display: flex; flex-direction: column;">
                <div class="img" style="height: 50%; width: 100%; background-color: #3e3862; background-image: url(https://miro.medium.com/v2/0*L_DMwouZ7IYE9PqA); background-position: center; background-size: cover;">
                    
                </div>
                <div class="txt" style="height: 50%; width: 100%; padding: 15px; display: flex; flex-direction: column; gap: 8px;">
                    <p style="color: #6255a5; font-size: 11px; font-weight: 600;">Design</p>
                    <p style="font-size: 15px; font-weight: 600;">Figma beginer to advance full course</p>
                    <a href="Signin_page.php" style="text-decoration: none;"><p style="background-color: #6255a5; padding: 5px 10px; border-radius: 10px; background-color: #6255a5; color: #f6f5fa; width: fit-content;">checkout</p></a>
                </div>
            </div>
            <div class="course_card" style="background-color: #f6f5fa; height: 300px; width: 250px; border-radius: 20px; overflow: hidden; display: flex; flex-direction: column;">
                <div class="img" style="height: 50%; width: 100%; background-color: #3e3862; background-image: url(https://www.cdmi.in/courses@2x/python-training-institute.webp); background-position: center; background-size: cover;">
                    
                </div>
                <div class="txt" style="height: 50%; width: 100%; padding: 15px; display: flex; flex-direction: column; gap: 8px;">
                    <p style="color: #6255a5; font-size: 11px; font-weight: 600;">Programming</p>
                    <p style="font-size: 15px; font-weight: 600;">Python beginer to advance full course</p>
                    <a href="Signin_page.php" style="text-decoration: none;"><p style="background-color: #6255a5; padding: 5px 10px; border-radius: 10px; background-color: #6255a5; color: white; width: fit-content;">checkout</p></a>
                </div>
            </div>
            <div class="course_card" style="background-color: #f6f5fa; height: 300px; width: 250px; border-radius: 20px; overflow: hidden; display: flex; flex-direction: column;">
                <div class="img" style="height: 50%; width: 100%; background-color: #3e3862; background-image: url(https://i.ytimg.com/vi/BPHAr4QGGVE/maxresdefault.jpg); background-position: center; background-size: cover;">
                    
                </div>
                <div class="txt" style="height: 50%; width: 100%; padding: 15px; display: flex; flex-direction: column; gap: 8px;">
                    <p style="color: #6255a5; font-size: 11px; font-weight: 600;">Programming</p>
                    <p style="font-size: 15px; font-weight: 600;">SQL Beginner to Advance Course</p>
                    <a href="Signin_page.php" style="text-decoration: none;"><p style="background-color: #6255a5; padding: 5px 10px; border-radius: 10px; background-color: #6255a5; color: white; width: fit-content;">checkout</p></a>
                </div>
            </div>
        </div>
    </div>

    <div id="page4" class="page4" style="height: 65vh; width: 100vw; background-color: #f6f5fa; display: flex;">
        
        <div class="left" style="height: 100%; width: 35%; display: flex; flex-direction: column; justify-content: center; padding: 0px 65px;">
            <p style="color: #6255a5; font-weight: 500; padding-bottom: 10px;">Our Advance Features</p>
            <p style="font-size: 28px; font-weight: 600; width: 90%; ">Why you must choose EnlightenED HUB</p>
            <p style="font-size: 12px; color: gray; width: 90%; padding: 25px 0px;">EnlightenED Hub is biggest platform to learn anything to improve your skill with 10k+ online course videos.</p>
            <div style="display: flex; gap: 35px;">
                <div>
                    <p style="font-weight: 600; font-size: 28px;">1k+</p>
                    <p style="font-size: 12px; color: gray;">Video courses</p>
                </div>
                <div>
                    <p style="font-weight: 600; font-size: 28px;">60+</p>
                    <p style="font-size: 12px; color: gray;">Instructors</p>
                </div>
                <div>
                    <p style="font-weight: 600; font-size: 28px;">20k</p>
                    <p style="font-size: 12px; color: gray;">Students</p>
                </div>
            </div>
        </div>
        <div class="right" style="height: 100%; width: 70%; display: flex; justify-content: center; gap: 25px;">
            <div class="column1" style="display: flex; flex-direction: column; justify-content: space-evenly; ">
                <div class="card2">
                    <i id="icns2" class="ri-links-line"></i>
                    <p style="font-weight: 500;">Lifetime Access</p>
                    <p style="font-size: 12px; color: gray;">Only buy one time and you can watch it anytime, anywhere just with wifi connection</p>
                </div>
                
            </div>
            <div class="column2" style="display: flex; flex-direction: column; justify-content: space-evenly; ">
                <div class="card2">
                    <i id="icns2" class="ri-graduation-cap-fill"></i>
                    <p style="font-weight: 500;">Expert Instruction</p>
                    <p style="font-size: 12px; color: gray;">Get 1 on 1 mentorship by IITins and top Instructors from top unviersities of world.</p>
                </div>
            </div>
            <div class="column3" style="display: flex; flex-direction: column; justify-content: space-evenly; ">
                <div class="card2">
                    <i id="icns2"  class="ri-settings-5-line"></i>
                    <p style="font-weight: 500;">Practicle Learning</p>
                    <p style="font-size: 12px; color: gray;">Learn things and skills that can applicable in real world with practical knowledge</p>
                </div>
            </div>
            <div class="column4" style="display: flex; flex-direction: column; justify-content: space-evenly; ">
                <div class="card2">
                    <i id="icns2" class="ri-vidicon-2-line"></i>
                    <p style="font-weight: 500;">Recorded Session</p>
                    <p style="font-size: 12px; color: gray;">Recorded + live session to increawse productivity in your life</p>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright" style="height: 8vh; width: 100vw; background-color: #f6f5fa; display: flex; align-items: center; justify-content: center; font-size: 12px; color: rgb(151, 151, 151); ">
        <p>© 2024 EnlightenED Hub. all rights reserved</p>
    </div>

</body>  
</html>