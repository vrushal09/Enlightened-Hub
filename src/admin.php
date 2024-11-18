<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "enlightened";
$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete'])) {
        $username = $conn->real_escape_string($_POST['UserName']);
        $deleteQuery = "DELETE FROM useraccounts WHERE UserName = '$username'";
        
        if ($conn->query($deleteQuery) === TRUE) {
            $msg = "Record deleted successfully";
        } else {
            $msg = "Error deleting record: " . $conn->error;
        }
    } elseif (isset($_POST['update'])) {
        $username = $conn->real_escape_string($_POST['UserName']);
        $email = $conn->real_escape_string($_POST['UserEmail']);
        $password = $conn->real_escape_string($_POST['UserPassword']);
        $updateQuery = "UPDATE useraccounts SET UserEmail = '$email', UserPassword = '$password' WHERE UserName = '$username'";

        if ($conn->query($updateQuery) === TRUE) {
            $msg = "Record updated successfully";
        } else {
            $msg = "Error updating record: " . $conn->error;
        }
    } elseif (isset($_POST['insert'])) {
        $newUsername = $conn->real_escape_string($_POST['newUserName']);
        $newEmail = $conn->real_escape_string($_POST['newUserEmail']);
        $newPassword = $conn->real_escape_string($_POST['newUserPassword']);
        $insertQuery = "INSERT INTO useraccounts (UserName, UserEmail, UserPassword) VALUES ('$newUsername', '$newEmail', '$newPassword')";

        if ($conn->query($insertQuery) === TRUE) {
            $msg = "Record inserted successfully";
        } else {
            $msg = "Error inserting record: " . $conn->error;
        }
    }
}

// Fetch data
$query = "SELECT * FROM useraccounts";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EdulightenED HUB - Admin Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
    <link rel="shortcut icon" href="https://i.postimg.cc/3YKB7zp0/favicon.png" type="image/x-icon">
    <style>
        /* Reset some default browser styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            width: 100%;
        }

        body, h1, p, table {
            font-family: "Poppins", sans-serif;
        }

        body {
            background-color: #f6f5fa;
            color: #333;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #6255a5;
            color: white;
            padding: 1rem;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        main {
            flex: 1;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        table {
            width: 100%;
            max-width: 800px;
            border-collapse: collapse;
            margin-top: 1rem;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #dfdffc;
        }

        table th {
            background-color: #dfdffc;
            color: #6255a5;
        }

        tr:last-child td {
            border-bottom: none;
        }

        .actions {
            display: flex;
            gap: 0.5rem;
        }

        .btn {
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.3s;
        }

        .delete-button {
            background-color: #e74c3c;
            color: white;
        }

        .delete-button:hover {
            background-color: #c0392b;
        }

        .update-button {
            background-color: #3498db;
            color: white;
        }

        .update-button:hover {
            background-color: #2980b9;
        }

        .insert-button {
            background-color: #2ecc71;
            color: white;
            margin-top: 1rem;
        }

        .insert-button:hover {
            background-color: #27ae60;
        }

        .form-popup {
            display: none;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            border: 3px solid #f1f1f1;
            z-index: 9;
            background-color: white;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .form-container {
            max-width: 300px;
        }

        .form-container input[type=text], .form-container input[type=password] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            background: #f6f5fa;
            border-radius: 5px;
        }

        .form-container input[type=text]:focus, .form-container input[type=password]:focus {
            border-color: #6255a5;
            outline: none;
        }

        .form-container .btn {
            background-color: #6255a5;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
            border-radius: 5px;
        }

        .form-container .cancel {
            background-color: red;
        }

        .form-container .btn:hover, .open-button:hover {
            background-color: #534494;
        }
    </style>
</head>
<body>
    <header>
        <h1>User Accounts</h1>
    </header>
    <main>
        <button class="btn insert-button" onclick="openInsertForm()">Insert New User</button>

        <?php
        if ($result->num_rows > 0) {
            echo "<table>
            <tr>    
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>    
                        <td>" . $row["UserName"] . "</td>
                        <td>" . $row["UserEmail"] . "</td>
                        <td>" . $row["UserPassword"] . "</td>
                        <td class='actions'>
                            <form action='admin.php' method='POST' style='display:inline-block;'>
                                <input type='hidden' name='UserName' value='" . $row["UserName"] . "' />
                                <input class='btn delete-button' type='submit' name='delete' value='Delete'/>
                            </form>
                            <button class='btn update-button' onclick='openForm(\"" . $row["UserName"] . "\", \"" . $row["UserEmail"] . "\", \"" . $row["UserPassword"] . "\")'>Update</button>
                        </td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No data found</p>";
        }
        ?>

        <p style="padding:10px;"><?php echo $msg ?></p>
        <a href="homepage.php" style="text-decoration:none;"><p style="color:red; font-weight:600; position: absolute; bottom:5%; left:5%; cursor:pointer">Logout</p></a>

        <!-- Update Form Popup -->
        <div class="form-popup" id="updateForm">
            <form action="admin.php" method="POST" class="form-container">
                <h2>Update User</h2>
                <input type="hidden" name="UserName" id="updateUserName">
                <label for="UserEmail"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="UserEmail" id="updateUserEmail" required>

                <label for="UserPassword"><b>Password</b></label>
                <input type="text" placeholder="Enter Password" name="UserPassword" id="updateUserPassword" required>

                <button type="submit" name="update" class="btn">Update</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>

        <!-- Insert Form Popup -->
        <div class="form-popup" id="insertForm">
            <form action="admin.php" method="POST" class="form-container">
                <h2>Insert New User</h2>
                <label for="newUserName"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="newUserName" id="newUserName" required>

                <label for="newUserEmail"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="newUserEmail" id="newUserEmail" required>

                <label for="newUserPassword"><b>Password</b></label>
                <input type="text" placeholder="Enter Password" name="newUserPassword" id="newUserPassword" required>

                <button type="submit" name="insert" class="btn">Insert</button>
                <button type="button" class="btn cancel" onclick="closeInsertForm()">Close</button>
            </form>
        </div>
    </main>

    <script>
        function openForm(username, email, password) {
            document.getElementById("updateUserName").value = username;
            document.getElementById("updateUserEmail").value = email;
            document.getElementById("updateUserPassword").value = password;
            document.getElementById("updateForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("updateForm").style.display = "none";
        }

        function openInsertForm() {
            document.getElementById("insertForm").style.display = "block";
        }

        function closeInsertForm() {
            document.getElementById("insertForm").style.display = "none";
        }
    </script>
</body>
</html>
