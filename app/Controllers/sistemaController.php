<?php
require "app/Models/consultas.php";
require "app/Models/conexion.php";
require "app/Models/registrar.php";
require "app/Models/actualizar.php";
require "app/Models/eliminar.php";
require "app/Models/masRAM.php";
require "app/Models/filtrar.php";

use inventario\filtrar;
use inventario\eliminar;
use inventario\actualizar;
use inventario\conexxion;
use inventario\Consultas;
use inventario\registrar;
use inventario\masRAM;

class sistemaController
{
    function inicio(){
        require "app/Views/inicio.php";
    }
    function almacen(){
        require "app/Views/almacen.php";
    }
    function iniciarSesion(){
        if (isset($_POST["NomUser"]) && isset($_POST["contra"])){
            $user = $_POST["NomUser"];
            $pass = $_POST["contra"];
            $respuesta = Consultas::loginAdmin($user,$pass);
            if ($respuesta==TRUE){

                require "app/Views/almacen.php";
            }else if ($respuesta==FALSE){
                require "app/Views/inicio.php";
                echo "<h1 style='color: red'>Usuario y/o contraseña incorrectos</h1>";
            }
        }

    }

    function registrarCelular(){
        $reg = new registrar();
        $reg -> nombre = $_POST["nombre"];
        $reg -> marca = $_POST["marca"];
        $reg -> modelo = $_POST["modelo"];
        $reg -> ram = $_POST["ram"];
        $reg -> procesador = $_POST["procesador"];
        $reg -> registrar();
    }
    function actualizar(){
        $act = new actualizar();
        $act -> nombre = $_POST["nombre"];
        $act -> marca = $_POST["marca"];
        $act -> modelo = $_POST["modelo"];
        $act -> ram = $_POST["ram"];
        $act -> procesador = $_POST["procesador"];
        $act -> obtener($_POST["id"]);
    }
    function eliminarRegistro(){
        $del = new eliminar();
        $del -> eliminarReg($_POST["id"]);
    }
    function comparacionRAM(){
        $ram = new masRAM();
        $ram->compraracion($_POST["id1"],$_POST["id2"]);
    }
    function filtrar(){
        require "app/Views/registrosSemana.php";
        $filtro = new filtrar();
        $filtro -> semanaREG($_POST["semana"]);
    }
}