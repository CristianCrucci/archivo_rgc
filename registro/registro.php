
<?php
ni_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once('agregar.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/bootstrap-toggle.min.css">       
        <link rel="icon" type="image/png" href="../css/imagenes/medalla.png" />
        <title>Archivo RGC</title>
    </head>
    <body>
        <form action="agregar.php" method="POST">
             <div class="modal fade" id="modal_usuario" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="titulo_usuario">Nuevo Usuario</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form from-horizontal" id="cuerpo_usuario">
                        <fieldset>
                          <legend>Datos del Usuario</legend>
                          <div class="form form-group col-md-6">
                              <label for="cargo" class="required">Cargo: </label>
                                <input type="text" name="cargo" placeholder="Cargo" class="form-control" required>
                          </div>
                          <div class="form form-group col-md-6">
                              <label for="grado" class="required">Grado: </label>
                              <input type="text" name="grado" placeholder="Grado" class="form-control" required>
                          </div>
                          <div class="form form-group col-md-6">
                            <label for="nombre" class="required">Nombre: </label>
                            <input type="text" name="nombre" placeholder="Nombre" class="form-control" required>
                          </div>
                          <div class="form form-group col-md-6">
                            <label for="apellido" class="required">Apellido: </label>
                            <input type="text" name="apellido" placeholder="Apellido" class="form-control" required>
                          </div>
                          <div class="form form-group col-md-6">
          
                            <label for="email" class="required">Email: </label>
                            <input type="email" name="email" placeholder="Email" class="form-control" required>
                          </div>
                          <div class="form form-group col-md-6">
                              <input type="submit" value="enviar">

                          </div>
        </form>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/login.js"></script>
    </body>