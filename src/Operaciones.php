<?php
class Operaciones
{

    function __construct()
    {
    }

    public function suma($numero1, $numero2)
    {
        if(!is_numeric($numero1) or !is_numeric($numero2)){
            throw new Exception("Solo se aceptan números.");
        }
        return $numero1 + $numero2;
    }

    public function resta($numero1, $numero2)
    {
        if(!is_numeric($numero1) or !is_numeric($numero2)){
            throw new Exception("Solo se aceptan números.");
        }
        return $numero1 - $numero2;
    }

    public function multiplicacion($numero1, $numero2)
    {
        if(!is_numeric($numero1) or !is_numeric($numero2)){
            
        }
        return $numero1 * $numero2;
    }

    public function division($numero1, $numero2)
    {
        if($numero2 == 0){
            throw new Exception("No se puede dividir por 0");
        }

        if(!is_numeric($numero1) or !is_numeric($numero2)){
            throw new Exception("Solo se aceptan números.");
        }
        return $numero1 / $numero2;
    }
}
    try {
        $matematicas = new Operaciones();
        echo $matematicas->suma(10, 7), "<br>";
        echo $matematicas->resta(5, 5), "<br>";
        echo $matematicas->multiplicacion(5, 7), "<br>";
        echo $matematicas->division(5, 3), "<br>"; 
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
}