<?php

namespace inventario;

class conexion{

    public $conex;
    public function __construct()
    {
        $host="localhost";
        $user="root";
        $contra="";
        $base="inventariocelulares";
        $this->conex = mysqli_connect($host, $user, $contra, $base);
    }

}
?>