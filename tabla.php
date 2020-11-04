<?php
          ini_set('display_errors', 1);
          ini_set('display_startup_errors', 1);
          error_reporting(E_ALL);

          include_once('conector.php');

          $conexion = new Conexion();
          $mysqli = $conexion->conectar();
          $query = 'SELECT * FROM datos;';
          
          if($resultado = $mysqli->query($query)){
              while($row = $resultado->fetch_assoc()){
                  $fila[] = $row;
              }
            
          }else {
            printf("Error: %s\n", $mysqli->error);
            $mysqli->close();
            echo $query;
            exit;
          }
          //$resultado->free();
          $mysqli->close();
          

?>