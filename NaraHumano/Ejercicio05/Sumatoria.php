<?php
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