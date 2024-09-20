<?php
    namespace Projeto\estacionamento\PHP;
    require_once('Calculo.php');
    
 
    Use Projeto\estacionamento\PHP\Calculo;
    Use estacionamento\PHP\controllEntrada;
 
   
    function calcularH($horas, $total)
    {
            if($horas > 60){
                return $total = 10 * $horas;
            }else{
                return $total = 5 * $horas;
            }
        echo $total;
    }
 
 
?>
 