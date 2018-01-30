<?php

include "dbCon.php";

$userId = $_POST['userId'];
$name = $_POST['name'];
$address = $_POST['address'];
$positionId = $_POST['positionId'];
$groupId = $_POST['groupId'];
$status = $_POST['status'];
$phone = $_POST['phone'];
$email = $_POST['email'];
// echo "<pre>";
print_r($name);
// echo "</pre>";

$rowsCount = count($userId);

for ($i=0; $i < $rowsCount; $i++) {
    # code...
    $query = "INSERT INTO users (`userId`, `password`, `name`, `address`, `positionId`, `groupId`, `status`, `phone`, `email`, `photo`)
                values ('', 'passwd', '$name[$i]', '$address[$i]', '$positionId[$i]', '$groupId[$i]', '$status[$i]', '$phone[$i]', '$email[$i]', 'NULL')";
    $query_exec = mysql_query($query, $connector);

    echo "<pre>";
    print_r($query);
    echo "=========";
    print_r($query_exec);
    echo "</pre>";
    // $updateQuery = "UPDATE users set where userId='". $userIdExist[$i] ."'";
    if ($query_exec)
    {
        header("Location: index.php");
    }
    else {
        echo mysql_error();
    }
 
    // else if (mysqli_query($updateQuery))
    // {
    //     header("Location: index.php");
    // }
}

?>