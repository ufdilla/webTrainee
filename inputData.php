<?php

include "dbCon.php";

if (isset ($_POST['userId']))
{
    $userId = $_POST['userId'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $positionId = $_POST['positionId'];
    $groupId = $_POST['groupId'];
    $status = $_POST['status'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $photo = $_POST['photo'];
    
    $rowsCount = count($userId);
    
    for ($i=0; $i < $rowsCount; $i++) {
        $query = "INSERT INTO users (`userId`, `password`, `name`, `address`, `positionId`, `groupId`, `status`, `phone`, `email`, `photo`)
                    values ('', 'passwd', '$name[$i]', '$address[$i]', '$positionId[$i]', '$groupId[$i]', '$status[$i]', '$phone[$i]', '$email[$i]', 'NULL')";
        $query_exec = mysql_query($query, $connector);
    
    if ($query_exec)
    {
        header("Location: index.php");
    }
    else {
        echo mysql_error();
    }
}
}

 if (isset($_POST['userIdExist']))
{
$userIdExist = $_POST['userIdExist'];
$passwordExist = $_POST['passwordExist'];
$nameExist = $_POST['nameExist'];
$addressExist = $_POST['addressExist'];
$positionIdExist = $_POST['positionIdExist'];
$groupIdExist= $_POST['groupIdExist'];
$statusExist = $_POST['statusExist'];
$phoneExist = $_POST['phoneExist'];
$emailExist = $_POST['emailExist'];
$photoExist = $_POST['photoExist'];

// echo $userIdExist;
        $rowsCount2 = count($userIdExist);

        for ($i = 0; $i < $rowsCount2; $i++) {

    $updateQuery = "UPDATE `users`
                    SET
                    `password`='" . $passwordExist[$i] ."',
                    `name`='" . $nameExist[$i] ."',
                    `address`='" . $addressExist[$i] ."',
                    `positionId`='" . $positionIdExist[$i] ."',
                    `groupId`='" . $groupIdExist[$i] ."',
                    `status`='" . $statusExist[$i] ."',
                    `phone`='" . $phoneExist[$i] ."',
                    `email`='" . $emailExist[$i] ."',
                    `photo`='" . $photoExist[$i] ."'
                    WHERE `userId`='" . $userIdExist[$i] ."'";

    $updateQuery_exec = mysql_query($updateQuery, $connector);


    echo "<pre>";
    print_r($updateQuery);
    echo $updateQuery;
    echo "=========";
    print_r($updateQuery_exec);
    echo "</pre>";

 if ($updateQuery_exec)
    {
        header("Location: index.php");
    }

    else
    {
        echo mysql_error();
    }
}
}

?>