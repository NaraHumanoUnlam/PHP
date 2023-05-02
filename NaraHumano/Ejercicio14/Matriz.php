<?php

function definirMatrix($dimension){
    $matriz = array();
    if($dimension!=""){
        for ($i=0; $i<$dimension; $i++){
            $matriz[$i] = array();
            for ($j = 0; $j < $dimension; $j++) {
                $matriz[$i][$j] = rand(1, 3);
            }
        }
    }

    return $matriz;
}

function mostrarDiagonalPrincipal($matriz){
    echo "Diagonal principal";
   $cant_filas = count($matriz);
    for ($i=0; $i<$cant_filas; $i++){
        echo "<br>". $matriz[$i][$i] . " ";
    }
}

function mostrarMatriz($matriz){
    echo "<h2>Mi Matriz</h2>";
    echo "<table style='margin: auto;'>";
    for ($i = 0; $i < count($matriz); $i++) {
        echo "<tr>";
        for ($j = 0; $j < count($matriz[$i]); $j++) {
            echo "<td>" . $matriz[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

function mostrarDiagonalSecundaria($matriz){
    echo "<br>Diagonal secundaria";
    $dim = count($matriz);
    for ($i = 0; $i < $dim; $i++) {
        echo "<br>" . $matriz[$i][$dim - $i - 1] . " ";
    }
}
function sumarValoresMatriz($matriz){
    $suma = 0;
    for ($i = 0; $i < count($matriz); $i++) {
        for ($j = 0; $j < count($matriz[$i]); $j++) {
            $suma+=$matriz[$i][$j];
        }
    }

    return $suma;
}
?>