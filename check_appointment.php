<?php include_once('layouts/header.php')?>
<script defer src="scripts/login_user.js"></script>

<br>
<h4 class="header">Consultar Citas Agendadas</h4>
<br>
<div  id="error" class="alert alert-danger" role="alert" style="display:none"></div>
<form id="login_user" name="login_user" action="view_appointment.php" method="POST">
    <div class="form-group row">
        <div class="col-sm-2">
            <label for="userId" class="col-form-label">Documento:</label>
        </div>
        <div class="col-sm-8">
            <input name="userId" type="number" class="form-control" id="userId" maxlength="12" placeholder="Digite su número de documento..."><br>
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-primary">Consultar</button>
        </div>  
    </div>   
</form>

<?php include_once('layouts/footer.php')?>