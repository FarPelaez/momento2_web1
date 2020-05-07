<?php include_once('layouts/header.php')?>
<script defer src="scripts/add_appointment.js"></script>

<?php
    session_start();
    ob_start();
    $userId = $_SESSION['userIdG'];
?>

<br>
<h4 class="header">Agendar Nueva Cita</h4>
<br>
<div id="error" class="alert alert-danger" role="alert" style="display:none"></div>
<form id="add_appointment" name="add_appointment" action="save_appointment.php" method="POST">
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="userId">Documento:</label>
            <li class='list-group-item border-light'><?php echo "$userId"?></li>
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
    <button type="submit" class="btn btn-primary">Agendar</button>
</form>

<?php include_once('layouts/footer.php')?>
