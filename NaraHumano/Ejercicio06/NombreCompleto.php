<?php
    //date_default_timezone_set('America/Argentina/Buenos_Aires');

    class Saludo {
        public $nombre;
        public $apellido;

        // Constructor de la clase Persona
        function __construct($nombre, $apellido) {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
        }
        function saludo($fecha) {
            $saludo = "";
            if($fecha >= "05:00:00" && $fecha < "13:00:00") {

                $saludo = "Buenos días";
            }elseif ($fecha >= "13:00:00" && $fecha < "21:00:00"){
                $saludo = "Buenas Tardes";
            } else {
                $saludo = "Buenas Noches";
            }

            return $saludo;
        }

        function saludoFormal($fecha) {
            return $this->saludo($fecha) . " " . $this->nombre . " " . $this->apellido;
        }
    }




?>