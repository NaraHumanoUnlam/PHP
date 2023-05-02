<?php
include_once ("Operacion.php");

class Operando {
    private $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }
    public function resolverEcuacion()
    {
        return $this->valor;
    }
}


class Sumar
{
    private $operador1;
    private $operador2;

    public function __construct($valor, $valor1) {
        $this->operador1 = $valor;
        $this->operador2 = $valor1;
    }

    public function resolverEcuacion(){
        return $this->operador1->resolverEcuacion() + $this->operador2->resolverEcuacion();
    }
}
class Restar extends Operando{
    private $operador1;
    private $operador2;

    public function __construct($valor, $valor1) {
        $this->operador1 = $valor;
        $this->operador2 = $valor1;
    }

    public function resolverEcuacion(){
        return $this->operador1->resolverEcuacion() - $this->operador2->resolverEcuacion();
    }
}

class Multiplicar{
    private $operador1;
    private $operador2;

    public function __construct($valor, $valor1) {
        $this->operador1 = $valor;
        $this->operador2 = $valor1;
    }

    public function resolverEcuacion(){
        return $this->operador1->resolverEcuacion() * $this->operador2->resolverEcuacion();
    }
}

?>
