<?php


namespace inventario;


class actualizar
{
    public $nombre,$marca,$modelo,$ram,$procesador;
    public function obtener($id){

        $conexion = new conexion();

        $consulta = mysqli_prepare($conexion->conex,"UPDATE celulares SET NOMBRE = ?,MARCA = ?,MODELO = ?,RAM = ?,PROCESADOR = ? WHERE ID = ?");
        $consulta->bind_param("ssssss",$this->nombre,$this->marca,$this->modelo,$this->ram,$this->procesador,$id);
        $consulta->execute();
        ?>
        <script>

            window.location = "http://localhost/moviles/index.php?controller=sistema&action=almacen";

        </script>

        <?php

    }
}