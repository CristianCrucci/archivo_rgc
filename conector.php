<?php

class Conexion
{
    private $usuario = 'admin';
    private $pass = 'Hernan98';
    private $database = 'usuarios';

    public function conectar()
    {
        $conn = new mysqli("localhost", $this->usuario, $this->pass, $this->database);
        if ($conn->connect_errno) {
            die("Hubo un error en la conexión con la base. Por favor, recargue la página. Si el error persiste, comuníquese con el administrador del sistema.");
        }

        return $conn;
    }
}



?>