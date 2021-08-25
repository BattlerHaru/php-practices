<?php

// Herencia: es la posibilidad de compartir atributos y metodos entre clases

class Persona {

    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre( $nombre ) {
        $this->nombre = $nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos( $apellidos ) {
        $this->apellidos = $apellidos;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setAltura( $altura ) {
        $this->altura = $altura;
    }
    public function getEdad() {
        return $this->edad;
    }

    public function setEdad( $edad ) {
        $this->edad = $edad;
    }

    public function hablar() {
        return 'Estoy hablando';
    }

    public function caminar() {
        return 'Estoy caminando';
    }
}

// Para heredar se utiliza extends
class Informatico extends Persona {
    public $lenguajes;
    public $experienciaProgramador;

    public function __construct() {
        $this->lenguajes = "Dart, amsiedam";
        $this->experienciaProgramador = 2;
    }

    public function sabeLenguajes( $lenguajes ) {
        $this->lenguajes = $lenguajes;
    }

    public function programar() {
        return 'Estoy programando';
    }
    public function repararOrdenador() {
        return 'Estoy reparando el ordenador';
    }
    public function ofimatica() {
        return 'Estoy escribiendo en word';
    }
}

class TecnicoRedes extends Informatico {
    public $auditarRedes;
    public $experienciaRedes;

    public function __construct() {
        // Para heredar lo del padre se usa Parent
        parent::__construct();
        $this->auditarRedes = "a veces";
        $this->experienciaRedes = 1;
    }

    public function auditoria() {
        return 'Estoy auditando';
    }
}

?>