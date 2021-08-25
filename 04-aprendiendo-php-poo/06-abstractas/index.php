<?php

// Una clase abstracta es una clase que no se puede instanciar pero si se puede usar y heredar
abstract class Ordenador {
    public $encendido;

    // Tampoco se pueden definir metodos
    abstract public function encender();

    public function apagar() {
        $this->encendido = false;
    }
}

class PcAsus extends Ordenador {
    public $software;
    public function arrancarSoftware() {
        $this->encendido = false;
    }

    public function encender() {
        $this->encendido = true;
    }

}

$ordenador = new PcAsus();
$ordenador->arrancarSoftware();
$ordenador->encender();
$ordenador->apagar();
var_dump( $ordenador );

?>