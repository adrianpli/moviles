<?php
require "app/Models/consultas.php";
require "app/Models/conexion.php";

use inventario\conexxion;
use inventario\Consultas;

class sistemaController
{
    function inicio(){
        require "app/Views/inicio.php";
    }
    function iniciarSesion(){
        if (isset($_POST["NomUser"]) && isset($_POST["contra"])){
            $user = $_POST["NomUser"];
            $pass = $_POST["contra"];
            $respuesta = Consultas::loginAdmin($user,$pass);
            if ($respuesta==TRUE){
                echo "entraste";
                require "app/Views/almacen.php";
            }else if ($respuesta==FALSE){
                require "app/Views/inicio.php";
                echo "<h1 style='color: red'>Usuario y/o contraseña incorrectos</h1>";
            }
        }

    }
}