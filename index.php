<?php include_once('layouts/header.php')?>
<?php    
    session_start();
    ob_start();
    session_destroy();
    ?>
<br>
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <h3 class="card-header">Agendar Nueva Cita</h3>
                <div class="card-body">
                    <div class="row">
                        <h5 class="card-title">Nuevo Usuario</h5>
                        <p class="card-text">Ingrese aqui para realizar su registro de usuario si es la primera vez que ingresa a nuestro sitio y proceder con el agendamiento de su cita.</p>    
                    </div>
                    &nbsp;
                    <div class="row">
                        <a href="add_user.php" class="btn btn-primary">Registro Nuevo Usuario</a>     
                    </div>
                </div>  
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <h3 class="card-header">Consultar Citas</h3>
                <div class="card-body">
                    <div class="row">
                        <h5 class="card-title">Usuario Registrado</h5>
                        <p class="card-text">Ingrese aqui si usted ya se registro como usuario y requiere agendar una nueva cita o ver sus citas agendadas anteriormente.</p>
                    </div>
                    &nbsp;
                    <div class="row">
                        <a href="check_appointment.php" class="btn btn-primary">Consultar</a>
                    </div>
                </div>
            </div>
    </div>
</div>
<br><br>

<?php include_once('layouts/footer.php')?>