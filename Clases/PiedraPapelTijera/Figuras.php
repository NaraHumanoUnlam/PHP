<?php
class Figuras {
    public $jugador;

    function __construct($jugador)
    {
        $this->jugador;
    }

    function setJugada($jugador){
        $jugada = $jugador->getJugada();
        switch ($jugada){
            case "PIEDRA" :
                return new Piedra($jugador);
            case "TIJERA":
                return new Tijera($jugador);
            case "PAPEL":
                return new Papel($jugador);
        }
    }
}