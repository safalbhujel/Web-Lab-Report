<?php
session_start();
include "config/db.php";

$sql = "SELECT * FROM assignments";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>

<title>View Assignments</title>
<link rel="stylesheet" href="css/style.css">

</head>

<body>

<h2>Assignments</h2>

<table border="1">

<tr>
<th>Title</th>
<th>Description</th>
<th>Deadline</th>
<th>Action</th>
</tr>

<?php

if ($result && mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)){
?>

<tr>

<td><?php echo $row['title']; ?></td>
<td><?php echo $row['description']; ?></td>
<td><?php echo $row['deadline']; ?></td>

<td>

<a href="edit_assignment.php?id=<?php echo $row['id']; ?>">Edit</a> |

<a href="delete_assignment.php?id=<?php echo $row['id']; ?>">Delete</a> |

<a href="submit_assignment.php?id=<?php echo $row['id']; ?>">Submit</a>

</td>

</tr>

<?php
	}
} else {
	echo "<tr><td colspan='4'>No assignments found.</td></tr>";
}
?>

</table>

</body>
</html>