<?php
    if(!isset($_POST['appointmentName'])){
         die("Error, not comming data");
    }
    session_start();
    ob_start();
    $userId = $_SESSION['userIdG'];
    $appointmentName = $_POST['appointmentName'];
    $appointmentDate = $_POST['appointmentDate'];
    $appointmentOldDate =$_POST['appointmentOldDate'];
    $appointmentOldName =$_POST['appointmentOldName'];

        try{
            include_once('db_connection.php');
            $sql = "UPDATE appointment_data SET user_id = '{$userId}', appointment_name = '{$appointmentName}', appointment_date = '{$appointmentDate}' WHERE appointment_data.appointment_name = '{$appointmentOldName}' AND appointment_data.appointment_date = '{$appointmentOldDate}'";
            $result = $conn->query($sql);
            header("location: view_new_appointment.php");
        }catch (Exception $ex){
            echo "DB connection error";
        }
?>
