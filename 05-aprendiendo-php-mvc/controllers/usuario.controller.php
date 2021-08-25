<?php

class UsuarioController {
    public function getTodos() {
        require_once 'models/usuario.model.php';

        $usuario = new UsuarioModel();

        $getTodos = $usuario->getTodos( 'usuarios2' );

        require_once 'views/usuarios/getTodos.view.php';

    }
    public function crear() {
        require_once 'views/usuarios/crear.view.php';

    }
}

?>