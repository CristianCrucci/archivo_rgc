<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/index.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" type="image/png" href="css/imagenes/medalla.png" />
        <title>Archivo RGC</title>
    </head>

    <body>
      <?php 
        include_once('tabla.php');
        ?>


        <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img src="css/imagenes/medalla.png" width="30" height="30" alt="">
            <a class="navbar-brand" href="#">Archivo RGC</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tablas
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Altos Mandos</a>
                    <a class="dropdown-item" href="#">Otras</a>
                  </div>
                </li>
              </ul>
              <form  class="form-inline my-2 my-lg-0">
                <button id="cerrar_sesion" class="btn btn-outline-success my-2 my-sm-0" type="submit">Cerrar Sesión</button>
              </form>
            </div>
          </nav>
        </header>
        <div>
        <form  class="form-inline my-2 my-lg-0">
          <input id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
          <button id="search_button" class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
        </div>
        <div>
          <table class="table table-striped" border="1">
            <thead>
            <tr>
              <td>Nombre</td>
              <td>Apellido</td>
              <td>Grado</td>
              <td>Cargo</td>
              <td>Email</td>
            </tr>
            </thead>

            <tr>
            <?php
              foreach ($fila as $datos):
            ?>
              <td>
                <?= $datos['Cargo'] ?>
              </td>

              <td>
                <?= $datos['Grado'] ?>
              </td>

              <td>
                <?= $datos['Nombre'] ?>
              </td>

              <td>
                <?= $datos['Apellido'] ?>
              </td>

              <td>
                <?= $datos['Email'] ?>
              </td>
            <tr>

              </tr>
              
              <?php  
              endforeach;
              ?>


          </table>
        </div>
        
          <script src="js/jquery.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/login.js"></script>
    </body>
</html>