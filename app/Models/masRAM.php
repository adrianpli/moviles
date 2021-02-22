<?php


namespace inventario;


class masRAM
{

    public function compraracion($id1,$id2){
        $conexion = new conexion();
        $consulta = "SELECT * FROM celulares WHERE ID = $id1";
        $resultado=mysqli_query($conexion->conex,$consulta);
        $datos = mysqli_fetch_object($resultado);
        $RAM1=$datos->RAM;
        $_SESSION["nombre1"]=$datos->NOMBRE;

        $consulta = "SELECT * FROM celulares WHERE ID = $id2";
        $resultado = mysqli_query($conexion->conex,$consulta);
        $datos = mysqli_fetch_object($resultado);
        $RAM2=$datos->RAM;
        $_SESSION["nombre2"]=$datos->NOMBRE;

        if ($RAM1 > $RAM2){

            $_SESSION["mayor"]=$_SESSION["nombre1"];
            ?>
            <script>
                window.location = "http://localhost/moviles/index.php?controller=sistema&action=almacen"
            </script>
            <?php
        }else{

            $_SESSION["mayor"]=$_SESSION["nombre2"];
            ?>
            <script>
                window.location = "http://localhost/moviles/index.php?controller=sistema&action=almacen"
            </script>
            <?php
        }
        ?>
<?php
    }



}