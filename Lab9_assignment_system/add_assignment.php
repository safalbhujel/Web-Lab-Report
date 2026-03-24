<?php
session_start();
include "config/db.php";

if(isset($_POST['add'])){

$title = $_POST['title'];
$description = $_POST['description'];
$deadline = $_POST['deadline'];

$sql = "INSERT INTO assignments(title,description,deadline)
VALUES('$title','$description','$deadline')";

mysqli_query($conn,$sql);

echo "Assignment added successfully";
}
?>

<h2>Add Assignment</h2>

<form method="POST">

<input type="text" name="title" placeholder="Assignment Title" required>
<br><br>

<textarea name="description" placeholder="Assignment Description"></textarea>
<br><br>

<input type="date" name="deadline">
<br><br>

<button name="add">Add Assignment</button>
<button><a href="dashboard.php">Back to Dashboard</a></button>

</form>