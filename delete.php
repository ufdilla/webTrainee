<?php

include "dbCon.php";

$userId = $_GET['userId'];
// query SQL untuk insert data
$query = "DELETE FROM `users` WHERE userId = $userId";
$exec = mysql_query($query, $connector);
echo $userId;
echo $exec;
// mengalihkan ke halaman index.php
if ($exec) header("location:index.php");
else echo mysql_error();
?>