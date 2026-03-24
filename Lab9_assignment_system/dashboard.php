<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
</head>
<link rel="stylesheet" href="css/style.css">
<body>

<h2>Welcome to Dashboard</h2>

<p>You are logged in.</p>

<a href="view_assignments.php">View Assignments</a>
<br><br>

<a href="add_assignment.php">Add Assignment (Admin)</a>
<br><br>

<a href="view_submissions.php">View Submissions</a>
<br><br>

<a href="logout.php">Logout</a>

</body>
</html>