<?php include_once('layouts/header.php')?>
<script defer src="scripts/add_user.js"></script>

<br>
<h4 class="header">Registrar Nuevo Usuario</h4>
<br>
<a id="error" class="alert alert-danger" role="alert" style="display:none"></a>
<form id="add_user" name="add_user" action="save_user.php" method="POST">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="userName">Nombres</label>
            <input name="userName" type="text" class="form-control" id="userName" placeholder="Digite sus nombres...">
        </div>
        <div class="form-group col-md-6">
            <label for="userLastName">Apellidos</label>
            <input name="userLastName" type="text" class="form-control" id="userLastName" placeholder="Digite sus apellidos...">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="userId">Documento</label>
            <input name="userId" type="number" class="form-control" id="userId" maxlength="12" placeholder="Digite su número de documento...">
        </div>
        <div class="form-group col-md-6">
            <label for="userBirthday">Fecha de Nacimiento</label>
            <input name="userBirthday" type="date" class="form-control" id="userBirthday">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="userCity">Ciudad</label>
            <input name="userCity" type="text" class="form-control" id="userCity" placeholder="Digite su ciudad de residencia...">
        </div>
        <div class="form-group col-md-4">
            <label for="userDistrict">Barrio</label>
            <input name="userDistrict" type="text" class="form-control" id="userDistrict" placeholder="Digite su barrio de residencia...">
        </div>
        <div class="form-group col-md-4">
            <label for="userPhone">Numero Móvil</label>
            <input name="userPhone" type="number" class="form-control" id="userPhone" size="10" placeholder="Digite su número móvil">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Continuar</button>
</form>
<br><br><br>

<?php include_once('layouts/footer.php')?>