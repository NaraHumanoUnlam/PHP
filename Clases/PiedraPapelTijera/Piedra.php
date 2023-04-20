<?php
class Piedra {
    public $jugador;

    function __construct($jugador){
        $this->jugador;
    }

    function juegoContraPapel($oponente){
        return $oponente;
    }

    function  juegoContraPiedra($oponente){
        return "empate";
    }

    function juegoContraTijera($oponente){
        return $this->jugador;
    }
}