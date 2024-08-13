<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/insertarDatos.php';


class InsertarDatosTest extends TestCase {
    private $conexion;

    protected function setUp(): void {
        $this->conexion = $this->getMockBuilder('Conexion')
            ->onlyMethods(['conectar'])
            ->getMock();
        
        $this->conexion->method('conectar')
            ->willReturn($this->createMock(mysqli::class));
    }

    public function testInsertarDatos() {
        $insertarDatos = new InsertarDatos();

        // Simula la inserción de datos
        $this->assertTrue($insertarDatos->insertar("Juan", "Pérez", "Calle 123", "Soltero", "juan.perez@example.com", "123456789", "Colombia-Bogotá"));
    }
}
?>
