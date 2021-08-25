<?php

interface Ordenador {
    public function endender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUsb();
}

class IMac implements Ordenador {

    public $modelo;

    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo( $modelo ) {
        $this->modelo = $modelo;
    }

    public function endender() {
        ;
    }
    public function apagar() {
        ;
    }
    public function reiniciar() {
        ;
    }
    public function desfragmentar() {
        ;
    }
    public function detectarUsb() {
        ;
    }

}

$mac = new IMac();

$mac->setModelo( 'Air' );

echo $mac->getModelo();

?>