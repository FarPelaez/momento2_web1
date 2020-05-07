<?php
    if(!isset($_POST['appointmentName'])){
         die("Error, not comming data");
    }
    session_start();
    ob_start();
    $userId = $_SESSION['userIdG'];
    $appointmentName = $_POST['appointmentName'];
    $appointmentDate = $_POST['appointmentDate'];

        try{
            include_once('db_connection.php');
            $sql = "INSERT into appointment_data (user_id,appointment_name,appointment_date) VALUES ('{$userId}','{$appointmentName}','{$appointmentDate}')";
            $result = $conn->query($sql);
            header("location: view_new_appointment.php");
        }catch (Exception $ex){
            echo "DB connection error";
        }
?>