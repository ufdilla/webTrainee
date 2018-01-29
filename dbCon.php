<?php
$username = "root";
$password = "";
$host = "localhost";
$connector = mysql_connect($host, $username, $password)
    or die("Unable to connect");

$selected = mysql_select_db("trainee", $connector)
    or die("Unable to connect");

// $userId = $_POST['userId'];

//     $safeid = mysql_real_escape_string($userId);

//     $query = mysql_query("delete from users where userId=$safeid", $connection);

//     if (mysql_affected_rows() > 0) {   // Just for testing

//        echo "Success";

// } else {

//         echo "Error deleting Data";

// }

?>