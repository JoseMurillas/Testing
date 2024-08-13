<?php 
    require_once 'insertarDatos.php';
    //Instanciamos la clase insertar datos
    $insertarDato = new insertarDatos();


    //Los datos para introducirlos a la base de datos
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $estadoCivil = $_POST['estadoCivil'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $paisCiudad = $_POST['paisCiudad'];

    //llamamos al metodo para insertar los datos
    $insertarDato->insertar($nombre, $apellido, $direccion, $estadoCivil, $correo, $telefono, $paisCiudad);
    
?>