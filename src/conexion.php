<?php 
    class conexion{
        public $servidor = "127.0.0.1";
        public $usuario = "root";
        public $contraseña = "";
        public $nombre = "aplicacion";

        public function conectar(){
            $conexion = mysqli_connect($this->servidor, $this->usuario, $this->contraseña, $this->nombre) or die ("Error en al conexion". mysqli_error($conexion));
            return $conexion;
        }
    }

?>