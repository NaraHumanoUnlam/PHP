<?php

function elegirMenu($entrada,$principal,$acompaniamiento, $postre){
    $archivo = parse_ini_file('menu.ini');

            echo $entrada==="on" ? "<br>Entrada: " . $archivo['entrada'] : "" ;
            echo $principal ==="on" ? "<br>Menu principal: " . $archivo['plato_principal'] : "" ;
            echo $acompaniamiento ==="on" ? "<br>Acompañamiento: " . $archivo['acompañamiento'] : "" ;
            echo $postre ==="on" ? "<br>Postre: " . $archivo['postre'] : "" ;


}
?>
