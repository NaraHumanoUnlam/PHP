<?php
    function Buscar($palabra, $texto){
        $cantidad = 0;
        $letras = array();
        $letritas = array();
        if($texto!= "" && $palabra != ""){
            for ($i = 0;  isset($palabra[$i]); $i++) {
                $letra = $palabra[$i];
                if ($letra != false) {
                    $letras[] = $letra;
                } else {
                    break;
                }
            }

            for ($i = 0;  isset($texto[$i]); $i++) {
                $letra = $texto[$i];
                if ($letra != false) {
                    $letritas[] = $letra;
                } else {
                    break;
                }
            }

            for ($i = 0; $i < count($letritas); $i++) {
                if ($letritas[$i] == $letras[0]) {
                    $encontrada = true;
                    for ($j = 0; $j < count($letras); $j++) {
                        $indice = $i+$j;
                        if($indice<count($letritas)){
                            if ($letritas[$indice] != $letras[$j] ) {
                                $encontrada = false;
                                break;
                            }
                        }elseif ($indice==78){
                            $encontrada = false;
                            break;
                    }
                }
                    if ($encontrada) {
                        $cantidad++;
                    }
                }
            }
        }


            return $cantidad;
    }
?>