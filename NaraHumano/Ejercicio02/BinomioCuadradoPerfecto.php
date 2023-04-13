<?php
    function binomio_cuadrado_perfecto_a($a, $b){
        if($a != "" && $b != "") {
            return ($a+$b)**2;
        } else {
            return "";
        }

    }

    function binomio_cuadrado_perfecto_b($a, $b){
        if($a != "" && $b != "") {
            return ($a ** 2) + (2 * $a * $b) + ($b ** 2);
        }else
        {
            return "";
        }
    }
?>