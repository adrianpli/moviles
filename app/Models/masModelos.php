<?php


namespace inventario;


class masModelos
{
public function mayores(){
    $conexion = new conexion();
    $consulta = "SELECT * FROM celulares";
    $resultado = mysqli_query($conexion->conex, $consulta);

    while ($row = mysqli_fetch_array($resultado)){
        $consulta2 = "SELECT COUNT(MODELO) FROM celulares WHERE MARCA = '$row[2]' ";
        $resultado2 = mysqli_query($conexion->conex,$consulta2);
        $datos2 = mysqli_fetch_array($resultado2);


        if ($datos2[0] >= 2){
           $_SESSION["masmodelos"] = $row[2];
        }
    }
}
}