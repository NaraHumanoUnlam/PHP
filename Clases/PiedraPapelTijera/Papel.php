<?php
class Papel {
    public $jugador;

    function __construct($jugador){
        $this->jugador;
    }

    function juegoContraPapel($oponente){
        return "empate";
    }

    function  juegoContraPiedra($oponente){
        return $this->jugador;
    }

    function juegoContraTijera($oponente){
        return $oponente;
    }

}