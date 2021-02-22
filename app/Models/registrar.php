<?php


namespace inventario;


class registrar
{
    public $nombre,$marca,$modelo,$ram,$procesador;
public function registrar(){
    $conexion = new conexion();
    $consulta = mysqli_prepare($conexion->conex,"INSERT INTO celulares (NOMBRE,MARCA,MODELO,RAM,PROCESADOR) VALUES (?,?,?,?,?)");
    $consulta->bind_param("sssss",$this->nombre,$this->marca,$this->modelo,$this->ram,$this->procesador);
    $consulta->execute();
    ?>
<script>
    window.location = "http://localhost/moviles/index.php?controller=sistema&action=almacen";
</script>

<?php
}
}