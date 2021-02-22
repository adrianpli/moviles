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
<h4 style="text-align: right">Fecha de hoy: <?php echo $_SESSION["hoy"] = date("Y - n - j");   ?></h4>
<h4 style="text-align: right">Administrador: <?php echo $_SESSION["admin"] ?></h4>
<h1 class="centrar-texto">Inventario</h1>

<form class="formulario" method="POST" action="http://localhost/moviles/index.php?controller=sistema&action=registrarCelular">
    <table class="table-registro">
        <tr>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>RAM</th>
            <th>Procesador</th>
            <th>Fecha de registro</th>
        </tr>
        <tr>
            <td>
                <input type="text" name="nombre" class="centrar-texto" placeholder="Nombre" required>
            <td>
                <input type="text" name="marca" class="centrar-texto" placeholder="Marca" required>
            </td>
            <td>
                <input type="text" name="modelo" class="centrar-texto" placeholder="Modelo" required>
            </td>
            <td>
                <input type="text" name="ram" class="centrar-texto" placeholder="RAM" required>
            </td>
            <td>
                <input type="text" name="procesador" class="centrar-texto" placeholder="procesador" required>
            </td>
            <td>
                <input type="text" name="fecha" class="centrar-texto" value="<?php echo $_SESSION["hoy"] = date("Y - n - j");   ?>" readonly>
            </td>
        </tr>
    </table>
<input type="submit"  value="Agregar nuevo" class="boton">
</form>
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
<br><br>
<form class="formulario" method="POST" action="http://localhost/moviles/index.php?controller=sistema&action=actualizar">
    <label>Ingrese el ID a editar</label>
    <input type="number" size="3" name="id">
    <input type="submit" value="editar" class="boton-rojo"><br>
    <table class="table-registro">
        <tr>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>RAM</th>
            <th>Procesador</th>
        </tr>
        <tr>
            <td>
                <input type="text" name="nombre" class="centrar-texto" placeholder="Nombre" required>
            <td>
                <input type="text" name="marca" class="centrar-texto" placeholder="Marca" required>
            </td>
            <td>
                <input type="text" name="modelo" class="centrar-texto" placeholder="Modelo" required>
            </td>
            <td>
                <input type="text" name="ram" class="centrar-texto" placeholder="RAM" required>
            </td>
            <td>
                <input type="text" name="procesador" class="centrar-texto" placeholder="procesador" required>
            </td>
        </tr>
    </table>
</form>
<br><br>
<form class="formulario" method="POST" action="http://localhost/moviles/index.php?controller=sistema&action=eliminarRegistro">
<label>Ingrese el ID a eliminar</label>
    <input type="number"size="3" name="id">
    <input type="submit" value="eliminar" class="boton-rojo">
</form>

<form class="formulario" action="http://localhost/moviles/index.php?controller=sistema&action=comparacionRAM" method="POST">
    <h3>Comparacion de memoria RAM</h3>
    <label>Ingrese el ID del telefono 1</label>
    <input type="number"size="3" name="id1">
<br>
    <label>Ingrese el ID del telefono 2</label>
    <input type="number"size="3" name="id2">
    <br>
    <input type="submit" value="Calcular" class="boton">
</form>
<center>
<label class="centrar-texto">Dispositivo con mas RAM entre <?php if (isset($_SESSION["nombre1"])) echo $_SESSION["nombre1"]; ?> y <?php if (isset($_SESSION["nombre2"])) echo $_SESSION["nombre2"]; ?></label>
<br><br>
<label class="centrar-texto">Dispositivo con mas RAM: <?php if (isset($_SESSION["mayor"])) echo $_SESSION["mayor"]; ?></label>
</center>
<br><br><br>
<form class="formulario" method="POST" action="http://localhost/moviles/index.php?controller=sistema&action=filtrar">
    <input type="date" value="2021-02-22" name="semana">
    <input type="submit" class="boton" value="Ver registros de la semana">
</form>
</body>
</html>