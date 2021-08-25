<?php

class Usuario {
    public $nombre;
    public $emaill;

    public function __constructor() {
        $this->nombre = 'Vanessa';
        echo 'Instancia creada<br>';
    }

    public function __toString() {
        return "Holi,{ $this->nombre }";
    }

    public function __destruct() {
        echo 'Instancia destruida';
    }
}

$usuario = new Usuario();
echo $usuario;

?>