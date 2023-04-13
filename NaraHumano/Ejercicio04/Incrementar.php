<?php

function incrementar_valor(&$valor) {
    if($valor!= "") {
        $valor++;
        echo $valor;
    }else {
        echo "";
    }

}
?>
