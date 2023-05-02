<?php


class Piedra {
    private $jugador;

    public function __construct($jugador) {
        $this->jugador = $jugador;
    }

    public function jugar($jugada) {
        return $jugada->teCompitePiedra($this);
    }

    public function teCompitePiedra($oponente) {
        return "empate";
    }

    public function teCompitePapel($oponente) {
        return $oponente->ganaste();
    }

    public function teCompiteTijera($oponente) {
        return $this->ganaste();
    }

    public function ganaste() {
        return $this->jugador;
    }
}