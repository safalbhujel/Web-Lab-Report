<?php
session_start(); // start session

// set cookie (valid for 1 hour)
setcookie("username", "Safal", time() + 3600);

// store data in session
$_SESSION["course"] = "BCA";

// check if cookie is set
$cookie_value = "";
if(isset($_COOKIE["username"])) {
    $cookie_value = $_COOKIE["username"];
} else {
    $cookie_value = "Cookie not set";
}

// check session value
$session_value = "";
if(isset($_SESSION["course"])) {
    $session_value = $_SESSION["course"];
} else {
    $session_value = "Session not set";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookies and Sessions</title>
    <style>
        body {
            font-family: Arial;
            padding: 20px;
        }
        .box {
            border: 1px solid black;
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<h2>Cookie and Session Example</h2>

<div class="box">
    <h3>Cookie Data</h3>
    <p>Username: <?php echo $cookie_value; ?></p>
</div>

<div class="box">
    <h3>Session Data</h3>
    <p>Course: <?php echo $session_value; ?></p>
</div>

</body>
</html>