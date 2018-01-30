<?php

include "dbCon.php";

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

// $userIdExist = $_POST['userIdExist'];
// $passwordExist = $_POST['passwordExist'];
// $nameExist = $_POST['nameExist'];
// $addressExist = $_POST['addressExist'];
// $positionIdExist = $_POST['positionIdExist'];
// $groupIdExist= $_POST['groupIdExist'];
// $statusExist = $_POST['statusExist'];
// $phoneExist = $_POST['phoneExist'];
// $emailExist = $_POST['emailExist'];
// $photoExist = $_POST['photoExist'];

$rowsCount = count($userId);

for ($i=0; $i < $rowsCount; $i++) {
    # code...
    // $query = "INSERT INTO users (`userId`, `password`, `name`, `address`, `positionId`, `groupId`, `status`, `phone`, `email`, `photo`)
    //             values ('', 'passwd', '$name[$i]', '$address[$i]', '$positionId[$i]', '$groupId[$i]', '$status[$i]', '$phone[$i]', '$email[$i]', 'NULL')";
    $updateQuery = "UPDATE `users`
                    SET
                    `password`='" . $password[$i] ."',
                    `name`='" . $name[$i] ."',
                    `address`='" . $address[$i] ."',
                    `positionId`='" . $positionId[$i] ."',
                    `groupId`='" . $groupId[$i] ."',
                    `status`='" . $status[$i] ."',
                    `phone`='" . $phone[$i] ."',
                    `email`='" . $email[$i] ."',
                    `photo`='" . $photo[$i] ."'
                    WHERE `userId`='" . $userId[$i] ."'";

// if ($query == 0)
// {
    $updateQuery_exec = mysql_query($updateQuery, $connector);

// }
// else if ()

//     $query_exec = mysql_query($query, $connector);

    echo "<pre>";
    print_r($updateQuery);
    echo $updateQuery;
    echo "=========";
    print_r($updateQuery_exec);
    echo $updateQuery_exec;
    echo "</pre>";

    // $updateQuery = "UPDATE `users`
    //                 SET
    //                 `password`='" . $passwordExist . "',
    //                 `name`='" . $nameExist . "',
    //                 `address`='" . $addressExist . "',
    //                 `positionId`='" . $positionIdExist . "',
    //                 `groupId`='" . $groupIdExist . "',
    //                 `status`='" . $statusExist . "',
    //                 `phone`='" . $phoneExist . "',
    //                 `email`='" . $emailExist . "',
    //                 `photo`='" . $ph . "'
    //                 WHERE `userId`='" . $userIdExist . "'";
/* 
    if ($query_exec)
    {
        header("Location: index.php");
    }
    // else */ if ($updateQuery_exec)
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