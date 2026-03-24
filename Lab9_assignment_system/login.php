<?php
session_start();
include "config/db.php";

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $user = mysqli_fetch_assoc($result);

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];

        header("Location: dashboard.php");
    } else {
        echo "Invalid email or password";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>
<link rel="stylesheet" href="css/style.css">
<body>

    <h2>Login</h2>

    <form method="POST">

        <input type="email" name="email" placeholder="Enter Email" required>
        <br><br>

        <input type="password" name="password" placeholder="Enter Password" required>
        <br><br>

        <button type="submit" name="login">Login</button>

    </form>

</body>

</html>