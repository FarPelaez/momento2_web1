<?php include_once('layouts/header.php')?>
<script defer src="scripts/edit_appointment.js"></script>

<?php
    if(!isset($_GET['appointment_old_date'])){
         die("Error, not comming data");
    }

    session_start();
    ob_start();
    $userId = $_SESSION['userIdG'];
    $appointmentOldDate = $_GET['appointment_old_date'];
    $appointmentOldName = $_GET['appointment_old_name']
?>

<br>
<h5 class="header">Modificar Cita</h5>
<div id="error" class="alert alert-danger" role="alert" style="display:none"></div>
<form id="edit_appointment" name="edit_appointment" action="update_appointment.php" method="POST">
    <div class="form-row">
        <div class="form-group col-md">
            <input type="hidden" name="userId" value="<?=$userId?>"/>
        </div>
        <div class="form-group col-md">
            <input type="hidden" name="appointmentOldDate" value="<?=$appointmentOldDate?>"/>
        </div>
        <div class="form-group col-md">
            <input type="hidden" name="appointmentOldName" value="<?=$appointmentOldName?>"/>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="appointmentName">Nombre cita</label>
            <input name="appointmentName" type="text" class="form-control" id="appointmentName" placeholder="Digite el nombre de la cita...">
        </div>
        <div class="form-group col-md-6">
            <label for="appointmentDate">Fecha cita</label>
            <input name="appointmentDate" type="date" class="form-control" id="appointmentDate">
        </div>
    </div>
    <a class="btn btn-warning" href="view_new_appointment.php" role="button">Regresar</a>
    <button type="submit" class="btn btn-primary" style="float: right;">Modificar</button>  
</form>

<?php include_once('layouts/footer.php')?>