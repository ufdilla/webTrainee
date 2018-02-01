<?php
include "dbCon.php";
$userId = $_POST['userId'];
// query SQL untuk insert data
$query = "DELETE from `users` where `userId`='$userId'";
mysql_query($query, $connector);
// mengalihkan ke halaman index.php
header("location:index.php");
?>