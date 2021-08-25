<?php

class NotaController {
    public function listar() {
        require_once 'models/nota.model.php';

        $nota = new NotaModel();

        // get data
        $notas = $nota->getTodos( 'notas2' );

        require_once 'views/nota/listar.view.php';
    }
    public function crear() {
        require_once 'models/nota.model.php';
        $nota = new NotaModel();
        $nota->setUsuario_id( 1 );
        $nota->setTitulo( 'Nota 5' );
        $nota->setDescripcion( 'Ejemplo desde el controlador' );
        $resp = $nota->guardar();

        header( 'Location: index.php?controller=nota&action=listar' );
    }
    public function borrar() {
    }

}

?>