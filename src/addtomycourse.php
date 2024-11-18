<?php
$id = $_GET["c_id"];

if (!isset($_COOKIE['all_courses'])) {
    echo "no cookie found";
    $allcourse = array();
    array_push($allcourse, $id);
    setcookie('all_courses', json_encode($allcourse), time() + (86400 * 30), "/");
    header("Location: dashboard.php?course_added=true");
    exit;
} else {
    echo "cookie found";
    $old_cookie = json_decode($_COOKIE['all_courses'], true);
    array_push($old_cookie, $id);
    setcookie('all_courses', json_encode($old_cookie), time() + (86400 * 30), "/");
    header("Location: dashboard.php?course_added=true");
    exit;
}
?>
