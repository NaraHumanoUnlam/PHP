<?php
include_once('./figuras/Piedra.php');
include_once('./figuras/Papel.php');
include_once('./figuras/Tijera.php');
class Jugador
{
    private $nombre;
    private $jugada;
   public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    function agregarJugada($jugada){
        $this->jugada = $jugada;
    }
    function competirContra($otroJugador){
       $valor1 =$this->asignarJugada($this->jugada, $this->nombre);
       $valor2 = $this->asignarJugada($otroJugador->jugada, $otroJugador->nombre);
       return $valor1->jugar($valor2);
    }

    public function asignarJugada($jugada, string $jugador) {
        switch ($jugada) {
            case 'piedra':
                return new Piedra($jugador);
            case 'tijera':
                return new Tijera($jugador);
            case 'papel':
                return new Papel($jugador);
        }
    }
}

