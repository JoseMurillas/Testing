<?php 
    class insertarDatos{
        public $nombre;
        public $apellido;
        public $direccion;
        public $estadoCivil;
        public $correo;
        public $telefono;
        public $paisCiudad;


        public function insertar($nombre, $apellido, $direccion, $estadoCivil, $correo, $telefono, $paisCiudad){
            require_once 'conexion.php';

            $conexion = new conexion();
            $mysqli = $conexion->conectar();

            if ($mysqli->connect_error) {
                die("Error en la conexión: " . $mysqli->connect_error);
            }

            list($pais, $ciudad) = explode("-", $paisCiudad);

            $query = "INSERT INTO clientes (nombre, apellido, direccion, estadoCivil, correo, telefono, pais, provincia) 
            VALUES ('$nombre', '$apellido', '$direccion', '$estadoCivil', '$correo', '$telefono', '$pais', '$ciudad')";
            mysqli_query($conexion->conectar(), $query) or die ("Error en el query");

            
            $mysqli->close();
            header('Location: ../view/vista.html');
            exit(); 
        }
    }
?>