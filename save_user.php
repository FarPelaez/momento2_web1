<?php

    if (!isset($_POST['userName'])) {
        die("Error, not comming data");
    }

    session_start();
    ob_start();
    $_SESSION['userIdG'] = $_POST['userId'];
    
    $userName =  $_POST['userName'];
    $userLastName =  $_POST['userLastName'];
    $userBirthday = $_POST['userBirthday'];
    $userCity = $_POST['userCity'];
    $userDistrict = $_POST['userDistrict'];
    $userPhone = $_POST['userPhone'];

        try{
            include_once('db_connection.php');
            $sql = "INSERT into user_data (id,name,lastname,birthday,city,district,phone) VALUES ('{$_SESSION['userIdG']}','{$userName}','{$userLastName}','{$userBirthday}','{$userCity}','{$userDistrict}','{$userPhone}')";
            $result = $conn->query($sql);
            header("location: add_appointment.php");             
        }catch (Exception $ex){
            echo "DB connection error";
        }
?>