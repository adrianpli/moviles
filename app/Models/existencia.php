<?php


namespace inventario;


class existencia
{
    public function __construct(){

    }
    public function datos(){
        $conexion = new conexion();
        $consulta = "SELECT * FROM celulares";
        $resultado = mysqli_query($conexion->conex,$consulta);
        $row = mysqli_fetch_object($resultado);
        return $row;
    }
}