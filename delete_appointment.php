<?php

    if(isset($_GET['appointment_date'])){
        include_once('db_connection.php');
        session_start();
        ob_start();
        $userId = $_SESSION['userIdG'];
        $appointmentDate = $_GET['appointment_date'];
        $appointmentName = $_GET['appointment_name'];
        $sql = "DELETE FROM appointment_data WHERE user_id = '{$userId}' AND appointment_name = '{$appointmentName}' AND appointment_date = '{$appointmentDate}'";
        $result = $conn->query($sql);
        header("location: view_new_appointment.php");
    }

?>