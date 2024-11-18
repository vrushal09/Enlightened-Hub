<?php
    // include "db.php";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "enlightened";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Step 2: Execute a query to retrieve product information
    $sql = "SELECT * FROM courses where course_cat='Programming'";
    $result_pro = $conn->query($sql);

    ?>

    <?php 

    // include "db.php";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "enlightened";

    $conn1 = new mysqli($servername, $username, $password, $database);

    if ($conn1->connect_error) {
        die("Connection failed: " . $conn1->connect_error);
    }

    // Step 2: Execute a query to retrieve product information
    $sql = "SELECT * FROM courses where course_cat='Marketing'";
    $result_mark = $conn1->query($sql);

    ?>

    <?php 

    // include "db.php";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "enlightened";

    $conn2 = new mysqli($servername, $username, $password, $database);

    if ($conn2->connect_error) {
        die("Connection failed: " . $conn2->connect_error);
    }

    // Step 2: Execute a query to retrieve product information
    $sql = "SELECT * FROM courses where course_cat='Design'";
    $result_des = $conn2->query($sql);

    ?>

    <?php 

    // include "db.php";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "enlightened";

    $conn3 = new mysqli($servername, $username, $password, $database);

    if ($conn3->connect_error) {
        die("Connection failed: " . $conn3->connect_error);
    }

    // Step 2: Execute a query to retrieve product information
    $sql = "SELECT * FROM courses where course_cat='Painting'";
    $result_paint = $conn3->query($sql);

?>