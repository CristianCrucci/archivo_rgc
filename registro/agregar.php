<?php

ni_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include_once('../conector.php');
include_once('registro.php');

if (isset($_POST['nombre'], $_POST['apellido'], $_POST['grado'], $_POST['cargo'], $_POST['email']) and $_POST['nombre']!="" and $_POST['apellido']!="" and $_POST['cargo']!="" and $_POST['grado']!="" and $_POST['email']!="") {
    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $grado = $_POST['grado'];
    $cargo = $_POST['cargo'];
    $email = $_POST['email'];
    
    $consulta = "INSERT INTO datos (Nombre,Apellido,Grado,Cargo,Email) VALUES (
        '$nombre',
        '$apellido',
        '$grado',
        '$cargo',
        '$email'
    )";

    if (mysqli_query($consulta) ){
        echo "<p>Registro agregado.</p>";
    } else {
        echo "<p>No se agregó...</p>";
    }

} else {
    echo "<p>Por favor, complete el <a href='registro.php'>formulario</a></p>";
}

?>