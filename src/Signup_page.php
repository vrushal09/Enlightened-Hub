<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "enlightened";
// $port = "3307";

$conn = new mysqli($host, $user, $password, $database);

$msg = "";
$values = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($username) || empty($password) || empty($email)) {
        $msg = "Please fill all the fields";
    } elseif (strlen($password) < 8) {
        $msg = "Password should be at least 8 characters long";
    } else {
        if (isset($_POST["submit"])) {
            if ($conn->connect_error) {
                die($conn->connect_error);
            }

            // Check if the email already exists
            $checkEmailQuery = "SELECT * FROM useraccounts WHERE UserEmail = '$email'";
            $result = $conn->query($checkEmailQuery);

            if ($result->num_rows > 0) {
                // Email already exists
                $msg = "Account already exists, try sign in";
            } else {
                // Insert
                $q = "INSERT INTO useraccounts(UserName,UserEmail,UserPassword) values('$username','$email','$password')";

                if ($conn->query($q) === TRUE) {
                    $msg = "Account created successfully, now sign in and enjoy"; /**/ 
                } else {
                    $msg = "Error: " . $conn->error;
                }
            }
            $conn->close();
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EdulightenED HUB - Login page</title>
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

        .main {
            height: 100vh;
            width: 100vw;
            display: flex;
        }

        .left {
            height: 100%;
            width: 40%;
            display: flex;
            flex-direction: column;
            gap: 15px;
            padding: 105px;
            justify-content: center;
            position: relative;
        }

        .right {
            height: 100%;
            width: 60%;
            background-image: url(https://i.postimg.cc/PTRW5xJ1/signup-Banner.png);
            background-position: center;
            background-size: cover;
        }

        .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0,0.4); 
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto; 
            padding: 20px;
            border: 1px solid #888;
            width: 80%; 
            border-radius: 10px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <div class="main">
            <div class="left">
                <a href="homepage.php" style="text-decoration: none;">
                    <p style="width:fit-content; font-weight: 600; background-color: #6255a5; color: white; padding: 6px 10px; border-radius: 100px; transition: .3s ease;">
                        <i class="ri-arrow-left-line"></i>
                    </p>
                </a>
                <p style="font-size: 25px; font-weight: 600; width: 70%;">Welcome to EdulightenED HUB</p>
                <p style="font-weight: 500; font-size: 12px; color: gray;">Enjoy ultimate learning experience</p>
                <input style="width: 75%; padding: 8px 12px; border-radius: 5px; border: 2px solid rgb(224, 224, 224);" type="text" placeholder="Enter your Name *" name="name">
                <input style="width: 75%; padding: 8px 12px; border-radius: 5px; border: 2px solid rgb(224, 224, 224);" type="email" placeholder="Enter your mail *" name="email">
                <input style="width: 75%; padding: 8px 12px; border-radius: 5px; border: 2px solid rgb(224,224,224);" type="password" placeholder="Enter your password *" name="password">
                <div style="display: flex; gap: 5px; font-size: 12px;">
                    <input type="checkbox" required> 
                    <p>I agree to all <a href="#" id="termsLink" style="color:black; font-weight:bold;">terms & condition</a></p> 
                </div>
                <input style="width: 75%; padding: 8px 12px; border-radius: 5px; border: 2px solid #6255a5; background-color: #6255a5; font-weight: 600; cursor: pointer; color: white;" type="submit" value="Create account" name="submit">
                <p style="padding: 5px; font-size: 12px; font-weight: 600;"><?php echo "$msg"; ?></p>
                <p style="font-size: 12px; position: absolute; bottom: 5%; font-weight: 600;">Already have account? <span><a href="Signin_page.php" style="color: #6255a5; font-weight: 600;">Sign in</a></span></p>
            </div>
            <div class="right"></div>
        </div>
    </form>

    <!-- The Modal -->
    <div id="termsModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 style="padding-bottom:15px">Terms and Conditions</h2>
            <p style="line-height:20px">
                Welcome to EdulightenED HUB. By accessing and using our website, you agree to comply with and be bound by the following terms and conditions of use. Please read these terms and conditions carefully before using our site.
                Use of the Website
                The content of the pages of this website is for your general information and use only. It is subject to change without notice.
                Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services, or information available through this website meet your specific requirements.
                User Accounts
                To access certain features of our website, you may be required to create an account. You must provide accurate and complete information when creating an account.
                You are responsible for maintaining the confidentiality of your account password and for all activities that occur under your account.
                You agree to notify us immediately of any unauthorized use of your account or any other breach of security.
                Intellectual Property
                This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance, and graphics. Reproduction is prohibited.
                Unauthorized use of this website may give rise to a claim for damages and/or be a criminal offense.
                Termination
                We may terminate or suspend access to our website immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the terms.
                Upon termination, your right to use the website will immediately cease. If you wish to terminate your account, you may simply discontinue using the website.
                Limitation of Liability
                In no event shall EdulightenED HUB, nor its directors, employees, partners, agents, suppliers, or affiliates, be liable for any indirect, incidental, special, consequential, or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses, resulting from (i) your use or inability to use the website; (ii) any unauthorized access to or use of our servers and/or any personal information stored therein.
                Changes to Terms
                We reserve the right, at our sole discretion, to modify or replace these terms at any time. If a revision is material, we will try to provide at least 30 days' notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.
                Governing Law
                These terms shall be governed and construed in accordance with the laws of [Your Country/State], without regard to its conflict of law provisions.
                Our failure to enforce any right or provision of these terms will not be considered a waiver of those rights. If any provision of these terms is held to be invalid or unenforceable by a court, the remaining provisions of these terms will remain in effect.
            </p>
        </div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("termsModal");

        // Get the link that opens the modal
        var btn = document.getElementById("termsLink");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the link, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
