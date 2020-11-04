<?php
/* $login = [
	'usuario' => 'admin',
	'pass' => '1234'
];

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

if ($usuario == $login['usuario'] && $pass == $login['pass']) {

	header('Location: ../index.html');
	
} */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['usuario']) && isset($_POST['pass'])){
    require_once("../conector.php");

    $conexion = new Conexion();
    $mysqli = $conexion->conectar();

    $loginNombre = $_POST['usuario'];
    $loginPassword = $_POST['pass'];

    $consulta = "SELECT * FROM usuarios WHERE usuario='$loginNombre' AND contrasenia='$loginPassword' LIMIT 1;";

    if($resultado = $mysqli->query($consulta)){
            $row = $resultado->fetch_array(MYSQLI_ASSOC);
            $userok = $row["usuario"];
            $passok = $row["contrasenia"];
        }else {
            printf("Error: %s\n", $mysqli->error);
            $mysqli->close();
            echo $consulta;
            exit;
    } 
    $resultado->free();
    $mysqli->close();

    }



    if(isset($loginNombre) && isset($loginPassword)){
        if($loginNombre == $userok && $loginPassword == $passok){
            session_start();
            $_SESSION['logged'] = true;
            header("Location: ../index.php");
        }

        else {
            header("Location: login.php?error=login");
        }
    }


?>