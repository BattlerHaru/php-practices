<?php

// clase
class Coche {

// atributos / propiedades
    public $color = "Rojo";
    public $marca = "Ferrari";
    public $modelo = "Aventador";
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;

// metodos
    public function getColor() {
        return $this->color;
    }

    public function setColor( $color ) {
        $this->color = $color;
    }

    public function acelerar() {
        $this->velocidad++;
    }

    public function desacelerar() {
        $this->velocidad--;
    }

    public function frenar() {
        $this->velocidad = 0;
    }

    public function getvelocidad() {
        return $this->velocidad;
    }

}

// instanciar la clase
$coche = new Coche();

echo $coche->getVelocidad() . '<br>';

$coche->setColor( "Amarillo" );
echo $coche->getColor() . '<br>';

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
echo $coche->getVelocidad() . '<br>';

$coche->desacelerar();
echo $coche->getVelocidad() . '<br>';

$coche->frenar();
echo $coche->getVelocidad() . '<br>';

?>