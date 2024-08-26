<?php
class Operaciones
{

    function __construct()
    {
    }

    public function suma($numero1, $numero2)
    {
        if(is_numeric($numero1) and is_numeric($numero2)){
            return $numero1 + $numero2;
        }else{
            return "Solo se aceptan numeros ";
        }
    }

    public function resta($numero1, $numero2)
    {
        if(is_numeric($numero1) and is_numeric($numero2)){
            return $numero1 - $numero2;
        }else{
            return "Solo se aceptan numeros ";
        }
    }

    public function multiplicacion($numero1, $numero2)
    {
        if(is_numeric($numero1) and is_numeric($numero2)){
            return $numero1 * $numero2;
        }else{
            return "Solo se aceptan numeros ";
        }
    }

    public function division($numero1, $numero2)
    {
        if ($numero2 == 0) {
            echo "No se puede dividir por 0";
        } else{
            if(is_numeric($numero1) and is_numeric($numero2)){
                return $numero1 / $numero2;
            }else{
                return "Solo se aceptan numeros ";
            }
        }
    }
}
// $matematicas = new Operaciones();
// echo $matematicas->suma(10, 7), "<br>";
// echo $matematicas->resta(5, 7), "<br>";
// echo $matematicas->multiplicacion(5, 7), "<br>";
// echo $matematicas->division(5, 4);
