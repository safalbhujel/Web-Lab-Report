<?php
include 'config/db.php';


if (isset($_POST['register'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = "INSERT INTO users (name,email,password,role)
VALUES ('$name','$email','$password','$role')";

    mysqli_query($conn, $sql);

    echo "<p style='color:green;'>Registration successful</p>";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<link rel="stylesheet" href="css/style.css">
<body>
    <h2>Student Registration</h2>
    <form method="post">
        <input type="text" name="name" placeholder="Enter Your Full Name" required>
        <br><br>
        <input type="email" name="email" placeholder="Enter Your Email" required>
        <br><br>
        <input type="password" name="password" placeholder="Enter Your Password" required>
        <br><br>

        <select name="role">
            <option value="student">Student</option>
            <option value="admin">Admin</option>
        </select>
        <br><br>
        <button type="submit" name="register" value="Register">Register</button>
        <botton></botton><a href="login.php">Already have an account? Login</a></botton>

    </form>
</body>

</html>