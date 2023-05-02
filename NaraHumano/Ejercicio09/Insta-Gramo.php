<?php
function guardarImagen($archivo,$name){
    if($archivo!= "" && $name!= "")
    {
        $target_dir = "Imagenes/";

        $target_file = $target_dir . basename($name) .".jpg" ;
        if(!move_uploaded_file($archivo['tmp_name'], $target_file)) {
            echo "NO SE PUDO CARGAR LA IMAGEN";
        }
    }

}
function mostrarImagenes(){
    $carpeta = "Imagenes/";
    $archivos = scandir($carpeta);
    foreach($archivos as $archivo) {
        $ruta = $carpeta . $archivo;
        $nombre = str_replace(".jpg", "", $archivo);
        if(!is_dir($carpeta . $archivo)) {
            echo  "<div class='foto'> <img src=$ruta alt=$archivo ><p> $nombre </p></div>" ;
        }
    }
}
?>