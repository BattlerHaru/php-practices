<?php

require_once 'autoload.php';

// $usuario = new Usuario();
// echo $usuario->nombre;
// $categoria = new Categoria();
// echo $categoria->nombre;
// $entrada = new Entrada();
// echo $entrada->titulo;

// para los namespaces, deben tener el mismo nombre de la carpeta preferentemente

// se suele utilizar de esta forma para facilitar el uso
use MisClases\Usuario;

class Principal {
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct() {
        // Aqui se utiliza sin el use
        // $this->usuario = new MisClases\Usuario();

        // Aqui se utiliza con el use
        $this->usuario = new Usuario();
    }
}

//Comprobar si existe una clase, busca en el autoload y en el namespace, si se agrega un @ esconde los warnings
// $clase = class_exists( 'Usuario' );
$clase = @class_exists( 'MisClases\Usuario' );

// Comprueba si existe un metodo en una clase
// $metodos = get_class_methods( 'MisClases\Usuario' );
// $metodos = get_class_methods( $usuario );
// $busqueda = array_search('setApellidos', $metodos);

if ( $clase ) {
    echo 'Existe clase usuario';
}

?>