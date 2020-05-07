<?php
    session_start();
    ob_start();
    $userId = $_SESSION['userIdG'];    
?>

<?php include_once('layouts/header.php')?>
<br>
<h5 class="header">Listado de Citas</h5>
<form id="view_form">
    <div class="form-row">
        <div class="form-group col-3">
            <label for="labelUserId">Documento</label>
        </div>
        <div class="form-group col-3">
            <label for="labelAppointName">Nombre</label>
        </div>
        <div class="form-group col-3">
            <label for="labelAppointDate">Fecha</label>
        </div>
        <div class="form-group col-3">
            <label for="labelAppointActions">Acciones</label>
        </div>
    </div>

<?php
        try{
            include_once('db_connection.php');
            $sql = "SELECT * FROM appointment_data WHERE user_id = '$_SESSION[userIdG]'";
            $result = $conn->query($sql);

            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    $rowTemplate="
                    <div class='form-row'>
                        <div class='form-group col-3'>
                            <li name='userId' class='list-group-item border-light'>{$row['user_id']}</li>
                        </div>
                        <div class='form-group col-3'>
                            <li name='userId' class='list-group-item border-light'>{$row['appointment_name']}</li>
                        </div>
                        <div class='form-group col-3'>
                            <li name='userId' class='list-group-item border-light'>{$row['appointment_date']}</li>
                        </div>
                        <div class='form-group col-3'>
                            <a href='edit_appointment.php?appointment_old_date={$row['appointment_date']}&appointment_old_name={$row['appointment_name']}' class='badge badge-info'>Modificar</a>
                            
                            <span type='button' class='badge badge-danger' data-toggle='modal' data-target='#staticBackdrop'>Eliminar</span>
                                <div class='modal fade' id='staticBackdrop' data-backdrop='static' tabindex='-1' role='dialog' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                                    <div class='modal-dialog' role='document'>
                                        <div class='modal-content'>
                                            <div class='modal-body'>¿Está seguro que desea eliminar el registro?</div>
                                            <div class='modal-footer'>
                                                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Atrás</button>
                                                <button onclick='location.href=`delete_appointment.php?appointment_date={$row['appointment_date']}&appointment_name={$row['appointment_name']}`' type='button' class='btn btn-danger'>Eliminar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>  
                    </div>";
                    echo $rowTemplate;
                }
            }
        }catch(Exception $ex){}
    ?>
    <div class="form-row">
        <a href="add_appointment.php" class="btn btn-primary btn-block">Agendar nueva cita</a>
    </div>
    <div class="form-row">
        <a href="index.php" class="btn btn-warning btn-block">Salir</a>
    </div>
</form>

<?php include_once('layouts/footer.php')?>

