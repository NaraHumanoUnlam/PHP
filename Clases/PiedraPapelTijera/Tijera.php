<?php
class Tijera {
    public $jugador;

    function __construct($jugador){
        $this->jugador;
    }

    function juegoContraPapel($oponente){
        return $this->jugador;
    }

    function  juegoContraPiedra($oponente){
        return $oponente;
    }

    function juegoContraTijera($oponente){
        return "empate";
    }
}