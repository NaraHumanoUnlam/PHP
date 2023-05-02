<?php


class Tijera {
    private $jugador;

    public function __construct($jugador) {
        $this->jugador = $jugador;
    }

    public function jugar($jugada) {
        return $jugada->teCompiteTijera($this);
    }

    public function teCompitePiedra($oponente) {
        return $oponente->ganaste();
    }

    public function teCompitePapel($oponente) {
        return $this->ganaste();
    }

    public function teCompiteTijera($oponente) {
        return "empate";
    }

    public function ganaste() {
        return $this->jugador;
    }
}