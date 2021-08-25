<?php

// los traits permiten definir metodos para compartir
trait Utilidades {
    public function mostrarNombres() {
        echo $this->nombre;
    }
}

class Coche {
    public $nombre = 'Camion';
    public $marca;

    use Utilidades;
}

class Persona {
    public $nombre;
    public $apellidos;
}

class Videojuego {
    public $nombre;
    public $anio;
}

$coche = new Coche();
$coche->mostrarNombres();
$persona = new Persona();
$videojuego = new Videojuego();

?>