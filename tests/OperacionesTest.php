<?php 
use PHPUnit\Framework\TestCase;
class OperacionesTest extends TestCase{
    private $op;
    public function setUp():void{
        $this->op = new Operaciones();
    }
    public static function valoresValidar(){
        return [
            [7,5,0],
            [11,4,7],
            [123,100,23],
            [1450,1200,250],
            [6000,1450,4550],
            [55603,10000,45603]
        ];
    }
    
    /** @dataProvider valoresValidar */ 
    public function testSumaConDosValores($resultado, $num1, $num2){
        $this->assertEquals($resultado,$this->op->division($num1,$num2));
    }
   
    /**public function testRestaConDosValores(){
        $this->assertEquals(3,$this->op->resta(5,2));
    }
    public function testMultiplicacionConDosValores(){
        $this->assertEquals(10,$this->op->multiplicacion(5,2));
    }
    public function testDivisionConDosValores(){
        $this->assertEquals(2.5,$this->op->division(5,2));
        $this->assertEquals(2.5,$this->op->division(5,2));
    }*/

}

?>