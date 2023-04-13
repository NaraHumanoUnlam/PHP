<?php
function semaforo_a($c) {
    echo "<h1>If Else</h1>";
    if($c == "rojo") {
        echo "<span>Frene</span>";
    }elseif ($c == "verde") {
        echo "<span>Avance</span>";
    }elseif ($c == "amarillo") {
        echo "<span>Precaución</span>";
    }else {
        echo "<span>Estado desconocido</span>";
    }
}

function semaforo_b($c) {
    $miString = "";
    ($c == "rojo") ?  $miString = "Frene" : (($c == "verde") ? $miString = "Avance" : (($c == "amarillo") ? $miString = "Precaución" : $miString = "Estado desconocido"));
    return $miString;
}

function semaforo_c($c) {
    echo "<h1>Switch</h1>";
    switch ($c) {
        case "verde" : echo "<span>Avance</span>";
        break;
        case "rojo" :  echo "<span>Frene</span>";
        break;
        case "amarillo" :  echo "<span>Precaución</span>";
        break;
        default :  echo "<span>Estado desconocido</span>";
        break;
    }
}

?>

