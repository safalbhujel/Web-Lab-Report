<?php
session_start();
include "config/db.php";

$assignment_id = $_GET['id'];

if(isset($_POST['submit'])){

$student_id = $_SESSION['user_id'];

$file = $_FILES['file']['name'];
$temp = $_FILES['file']['tmp_name'];

$path = "uploads/" . $file;

move_uploaded_file($temp,$path);

$sql = "INSERT INTO submissions(student_id,assignment_id,file_path,submission_date)
VALUES('$student_id','$assignment_id','$path',NOW())";

mysqli_query($conn,$sql);

echo "Assignment submitted successfully";
}
?>

<h2>Submit Assignment</h2>

<form method="POST" enctype="multipart/form-data">

<input type="file" name="file" required>
<br><br>

<button name="submit">Upload Assignment</button>

</form>