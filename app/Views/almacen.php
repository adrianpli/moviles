<?php

$host="localhost";
$user="root";
$contra="";
$base="inventariocelulares";
$conex = mysqli_connect($host, $user, $contra, $base);

$consulta = "SELECT * FROM celulares";
$resultado = mysqli_query($conex,$consulta);

?>





<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;700;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4428506a18.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="public/CSS/estilos.css">
    <title>inventario</title>
</head>
<body>
<h1 class="centrar-texto">Inventario</h1>
<table class="table">
    <input type="button" value="Agregar nuevo" class="boton">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>RAM</th>
        <th>Procesador</th>
    </tr>

    <?php
    while ($row = mysqli_fetch_assoc($resultado)){?>
        <tr>
        <td >
            <?php
        echo $row["ID"];
            ?>
        </td>
        <td  >
            <?php
        echo $row["NOMBRE"];
        ?>
        <td >
                <?php
        echo $row["MARCA"];
        ?>
        </td>
        <td  >
            <?php
        echo $row["MODELO"];
        ?>
        </td>
        <td >
            <?php
        echo $row["RAM"];
        ?>
        </td>
        <td ">
            <?php
        echo $row["PROCESADOR"];
        ?>
        </td>
            <td class="sin-borde">
                <input type="button" value="editar" class="boton-rojo">
                <input type="button" value="eliminar" class="boton-rojo">
            </td>

        </tr>

<?php
    }
    ?>
</table>

</body>
</html>