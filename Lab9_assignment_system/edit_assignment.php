<?php
include "config/db.php";

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM assignments WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

$title = $_POST['title'];
$description = $_POST['description'];
$deadline = $_POST['deadline'];

mysqli_query($conn,"UPDATE assignments SET
title='$title',
description='$description',
deadline='$deadline'
WHERE id=$id");

header("Location: view_assignments.php");
}
?>

<h2>Edit Assignment</h2>

<form method="POST">

<input type="text" name="title" value="<?php echo $row['title']; ?>">
<br><br>

<textarea name="description"><?php echo $row['description']; ?></textarea>
<br><br>

<input type="date" name="deadline" value="<?php echo $row['deadline']; ?>">
<br><br>

<button name="update">Update</button>

</form>