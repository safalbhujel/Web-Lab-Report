<?php
include "config/db.php";

$id = $_GET['id'];

$sql = "DELETE FROM assignments WHERE id=$id";

mysqli_query($conn,$sql);

header("Location: view_assignments.php");
?>