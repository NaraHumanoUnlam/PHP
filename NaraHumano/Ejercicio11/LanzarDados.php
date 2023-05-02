<?php

function obtenerNumero(){
    $numero_aleatorio = rand(1, 6);
    return $numero_aleatorio;
}

function lanzar($numero_dados){
    $suma = 0;

    for ($i=0; $i< $numero_dados; $i++){
        $dado = $i+1;
        $valor = obtenerNumero();
        $ruta = "Dados/" . $valor . ".jpg";
        echo "<img src={$ruta} alt='dado_'.{$valor}>";

        $suma = $valor + $suma;
    }
    echo "<br> <br>Puntaje obtenido: " . $suma;
}
?>
