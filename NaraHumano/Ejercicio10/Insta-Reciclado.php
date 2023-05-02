<?php
function mostrarImage($nombre){
    echo "una imagen";
}

function mostrarNombreImagenesCarpeta(){
    $carpeta = "../Ejercicio09/Imagenes/";
    $archivos = scandir($carpeta);
    foreach($archivos as $archivo) {
        $ruta = $carpeta . $archivo;
        $nombre = str_replace(".jpg", "", $archivo);
        if(!is_dir($carpeta . $archivo)) {
            echo  "<a href='imagen.php?nombre={$archivo}'><p> $nombre </p></a>" ;
        }
    }
}

?>