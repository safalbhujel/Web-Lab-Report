<?php
session_start();
include "config/db.php";

$sql = "SELECT submissions.*, users.name, assignments.title
FROM submissions
JOIN users ON submissions.student_id = users.id
JOIN assignments ON submissions.assignment_id = assignments.id";

$result = mysqli_query($conn,$sql);
?>

<h2>Student Submissions</h2>

<table border="1">

<tr>
<th>Student</th>
<th>Assignment</th>
<th>File</th>
<th>Date</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['name']; ?></td>
<td><?php echo $row['title']; ?></td>

<td>
<a href="<?php echo $row['file_path']; ?>">Download</a>
</td>

<td><?php echo $row['submission_date']; ?></td>

</tr>

<?php } ?>

</table>