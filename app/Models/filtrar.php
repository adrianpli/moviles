<?php


namespace inventario;


class filtrar
{
    public function semanaREG($hoy){
        $conexion = new conexion();
        for ($i=0;$i<2;$i++) {
            $consulta = "SELECT * FROM celulares WHERE FECHA_REG BETWEEN DATE_ADD('$hoy', INTERVAL -7 DAY) AND '$hoy';";
            $resultado = mysqli_query($conexion->conex, $consulta);
            $_SESSION["numrows"] = mysqli_num_rows($resultado);
        }
?>
        <table class="table">

    <tr>
<th>ID</th>
        <th>Nombre</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>RAM</th>
        <th>Procesador</th>
        <th>Fecha de registro</th>
    </tr>

        <?php
while ($row = mysqli_fetch_assoc($resultado)){?>
    <tr>
        <td >
            <?php echo $row["ID"]; ?>

        </td>
        <td  >
            <?php echo $row["NOMBRE"]; ?>

        <td >
            <?php echo $row["MARCA"]; ?>
        </td>
        <td  >
            <?php echo $row["MODELO"]; ?>

        </td>
        <td >
            <?php echo $row["RAM"]; ?>
        </td>
        <td >
            <?php echo $row["PROCESADOR"]; ?>
        </td>
        <td>
            <?php echo $row["FECHA_REG"]; ?>
        </td>
    </tr>
    <?php
}
?>
</table>
<?php
    }
}
?>