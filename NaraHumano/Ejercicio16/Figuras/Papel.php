<?php

class Papel {
    private $jugador;

    public function __construct($jugador) {
        $this->jugador = $jugador;
    }

    public function jugar($jugada) {
        return $jugada->teCompitePapel($this);
    }

    public function teCompitePiedra($oponente) {
        return $this->ganaste();
    }

    public function teCompitePapel($oponente) {
        return "empate";
    }

    public function teCompiteTijera($oponente) {
        return $oponente->ganaste();
    }

    public function ganaste() {
        return $this->jugador;
    }
}