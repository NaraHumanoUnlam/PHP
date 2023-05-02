<?php
function guardarVisitante($nombre,$planeta){

    $jsonString = file_get_contents('visitantes.json');
    $datos = json_decode($jsonString, true);
    if($datos === null){
        $datos = [];
    }
    $data = array(
        "nombre" => $nombre,
        "planeta" => $planeta
    );
    array_push($datos, $data);
    $newJsonString = json_encode($datos);
    file_put_contents('visitantes.json', $newJsonString);

}

function listarVisitante() {
    $jsonString = file_get_contents('visitantes.json');
    $datos = json_decode($jsonString, true);
    $contador = 0;

    foreach ($datos as $visitante){
        if($visitante['planeta'] != 'tierra'){
            $contador++;
        }
        echo "<br>Visitante: " . $visitante['nombre'] . "<br> Del Planeta: " . $visitante['planeta'] ;
    }

    echo "<br>Total de visitantes de otros planetas: " . $contador;
}
?>