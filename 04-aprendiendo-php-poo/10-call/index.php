<?php

class Persona {
    private $nombre;
    private $edad;
    private $ciudad;

    public function __construct( $nombre, $edad, $ciudad ) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }

// sobrecarga
    public function __call( $name, $arguments ) {
        // return 'No existe el metodo';
        $prefix_metodo = substr( $name, 0, 3 );
        return $prefix_metodo;
    }
}

$persona = new Persona( "Marie", 25, "Madrid" );
echo $persona->getNombre();

?>