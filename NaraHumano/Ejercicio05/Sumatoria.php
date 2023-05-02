<?php

function mostrar_vector($array){
    $count = 0;
    echo " El vector es: [";
    foreach ($array as $item){
        if($count<2){
            echo  $item . ", "  ;
            $count++;
        }else
            echo $item ;
    }
    echo "]";
}
function agregar_elemento($array, $elemento){
    if($elemento > 0){
        array_push($array, $elemento);
    }


    return $array;
}
function agregar_primer_elemento($elemento){
    $array = [];
    if($elemento > -999999){
        array_push($array, $elemento);
    }
    return $array;
}
function sumatoria_a( $array ) {
    $suma = 0;
    if(isset($array)){
        $count = count($array);
        for ($i = 0; $i < $count; $i++) {
            $suma+= $array[$i];

        }
    }
  return $suma;
}

function sumatoria_b( $array ){
    $suma = 0;
    foreach ($array as $item){
        $suma += $item;
    }

    return $suma;
}

function sumatoria_c( $array ){
    $suma = 0;
    if(isset($array)) {
        $count = count($array);
        $index = 0;
        while ($index<$count){
            $suma+=$array[$index];
            $index++;
        }
    }
    return $suma;
}


?>