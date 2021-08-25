<?php

class Coche {

    // atributos / propiedades
    // Public: Se puede acceder desde cualquier lugar, dentro y fuera de la clase
    // Protected: se puede acceder desde la clase y clases que se hereden
    // Private: solo se puede acceder desde la clase
    public $color;
    public $marca;
    public $modelo;
    public $velocidad;
    public $caballaje;
    public $plazas;

    // constructor
    public function __construct(
        $color,
        $marca,
        $modelo,
        $velocidad,
        $caballaje,
        $plazas ) {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }

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

    //Funcion con tipo de dato
    public function mostrarInformacion( Coche $coche ) {
        $informacion = "<h1>Informacion del coche</h1>";
        $informacion .= "<br>Color:" . $coche->color;
        $informacion .= "<br>Modelo:" . $coche->modelo;
        $informacion .= "<br>Velocidad:" . $coche->velocidad;
        return $informacion;

    }

}

?>