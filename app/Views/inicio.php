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
    <title>Control de inventario</title>
</head>
<body class="fondo-inicio">

<div class="contenedor">
    <div class="contenedor-hijo">
        <h1 class="centrar-texto">Bienvenido al sistema de control de inventario</h1>
        <br>
        <form class="formulario" method="POST" action="http://localhost/moviles/index.php?controller=sistema&action=iniciarSesion">
            <label>Administrador</label><br><br>
            <input name="NomUser" placeholder="Nombre de usuario" required><br><br>
            <label>Contraseña</label><br><br>
            <input name="contra" placeholder="Contraseña" required><br><br>
            <input type="submit" class="boton" value="Ingresar">
        </form>
    </div>
</div>
</body>
</html>
