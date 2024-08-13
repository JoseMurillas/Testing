<?php
use PHPUnit\Framework\TestCase;
require_once '/../src/insertarDatos.php';

class ConexionTest extends TestCase {
    public function testConexionFallida() {
        // Configura un entorno que cause una conexión fallida
        $conexion = new Conexion();
        $conexion->servidor = "invalid_host"; // Esto debería generar una advertencia
        $this->expectException(mysqli_sql_exception::class);
        $conexion->conectar();
    }
}
?>
