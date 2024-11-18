<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EdulightenED HUB - Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" integrity="sha512-OQDNdI5rpnZ0BRhhJc+btbbtnxaj+LdQFeh0V9/igiEPDiWE2fG+ZsXl0JEH+bjXKPJ3zcXqNyP4/F/NegVdZg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="https://i.postimg.cc/3YKB7zp0/favicon.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* CSS boilerplate */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: white; /* Dark purple */
            color: #f6f5fa; /* Light purple */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        .form-container {
            max-width: 400px;
            width: 100%;
            background-color: white; /* Light purple */
            color: #6255a5; /* Dark purple */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: calc(100% - 20px);
            padding: 12px;
            margin-bottom: 15px;
            border: 2px solid #dfdffc; /* Light blue */
            background-color: transparent;
            font-size: 16px;
            transition: border-color 0.3s ease;
            border-radius: 5px;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus {
            border-color: #6255a5; /* Dark purple */
            outline: none;
        }

        textarea {
            padding: 15;
            resize: none;
            height: 150px;
        }

        input::placeholder,
        textarea::placeholder {
            color: #dfdffc; /* Light blue */
            opacity: 0.7;
        }

        button[type="submit"] {
            background-color: #f6f5fa; /* Light purple */
            color: #6255a5; /* Dark purple */
            padding: 12px 0;
            width: 100%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #dfdffc; /* Light blue on hover */
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
        }

        .title h1 {
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<a href="homepage.php"  style="text-decoration: none;"><p style="width:fit-content; font-weight: 600; background-color: #6255a5; color: white; padding: 6px 10px; border-radius: 100px; transition: .3s ease; position:absolute; top:5%; left:2.5%" ><i class="ri-arrow-left-line"></i></p></a>
    <div class="form-container">
        <div class="title">
            <h1>Contact Us</h1>
            
        </div>
        <form action="https://api.web3forms.com/submit" method="POST">
            
            <!-- Replace with your Access Key -->
            <input type="hidden" name="access_key" value="2547aff0-adf9-4156-9e47-7ff91da5964a">
        
            <!-- Form Inputs. Each input must have a name="" attribute -->
            <input style="width: 337px;" type="text" name="name" placeholder="Your Name" required>
            <input style="width: 337px;" type="email" name="email" placeholder="Your Email" required>
            <textarea style="width: 337px;" name="message" class="p-[12px]" placeholder="Your Message" required></textarea>
        
            <!-- Submit Button -->
            <button type="submit">Submit Form</button>
        
        </form>
    </div>
</body>
</html>
