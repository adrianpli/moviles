<?php


namespace inventario;


class eliminar
{
    public function eliminarReg($id){

        $conexion = new conexion();
        $consulta = mysqli_prepare($conexion->conex,"DELETE FROM celulares WHERE ID = ?");
        $consulta->bind_param("s",$id);
        $consulta->execute();
        ?>
        <script>
            window.location = "http://localhost/moviles/index.php?controller=sistema&action=almacen";
        </script>

        <?php

    }
}