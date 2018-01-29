<?php
include "dbCon.php";

$id = $_POST['delete_id'];
$query = "delete from users where userId = $id";

?>
