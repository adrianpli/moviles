<?php


namespace inventario;

class Consultas  {
    public function __construct(){
        parent::__construct();
    }
    static function loginAdmin($usuario,$contrasena){
        $conexion = new conexion();
        $consulta = "SELECT * FROM administradores WHERE USUARIO = '$usuario' AND CONTRA = '$contrasena'";
        $resultado = mysqli_query($conexion->conex,$consulta);
        $datos = mysqli_fetch_object($resultado);
        $_SESSION["admin"] = $datos -> USUARIO;
        $_SESSION["id"] = $datos -> ID_ADMIN;
        return true;
    }

}
?>