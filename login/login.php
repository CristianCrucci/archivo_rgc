<?php

require_once('controller_login.php');


?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/index.css"  type="text/css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" type="image/png" href="../css/imagenes/medalla.png" />
        <title>Archivo RGC</title>
    </head>

    <body>
        <div class="contenido-tab tab-content text-center">
            <img src="../css/imagenes/medalla.png" style="width: 100px; height: 100px;">
        </div>
        <div class="contenido-tab tab-content text-center mx-auto h-100 w-75 mt-3">
            <!-- Iniciar Sesion -->
            <div id="iniciar-sesion" class="tab-pane fade show active" role="tabpanel">
                <h4>Iniciar Sesión</h4>
                <form action="controller_login.php" method="POST" onsubmit="validate()">
                    <div class="form-group row row-cols-2 mx-auto w-50">
                        <label for="usuario" class="col-3 col-form-label">
                             Usuario:
                        </label>
                        <div>
                            <input id="usuario" class="form-control" autocomplete="off" type="text" placeholder="Ingresa tu usuario" name="usuario" required>
                        </div>            
                    </div>
        
                    <div class="form-group row row-cols-2 mx-auto w-50">
                        <label for="pass" class="col-sm-3 col-form-label">
                            Contraseña:
                        </label>
                        <div>
                            <input id="pass" class="form-control req" autocomplete="off" type="password" placeholder="Ingresa tu contraseña" name="pass" required>
                        </div>
                    </div>
                    <div clas="botonLogin">
                        <input id="submit" type="submit" class="btn btn-outline-primary px-4" value="Iniciar Sesión">
                    </div>
                </form>
            </div>
            <script type="text/javascript" src="../js/jquery.js"></script>
            <script type="text/javascript" src="../js/bootstrap/bootstrap.min.js"></script>
            <script type="text/javascript" src="../js/login.js"></script>

        </body>

</html>