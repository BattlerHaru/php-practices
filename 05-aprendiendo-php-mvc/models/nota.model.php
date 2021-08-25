<?php
require_once 'modeloBase.model.php';

class NotaModel extends ModeloBase {
    public $usuario_id;
    public $titulo;
    public $descripcion;

    public function __constructor() {
        parent::__constructor();
    }

    public function getUsuario_id() {
        return $this->usuario_id;
    }
    public function setUsuario_id( $usuario_id ) {
        $this->usuario_id = $usuario_id;
    }
    public function getTitulo() {
        return $this->titulo;
    }
    public function setTitulo( $titulo ) {
        $this->titulo = $titulo;
    }
    public function getDescripcion() {
        return $this->descripcion;
    }
    public function setDescripcion( $descripcion ) {
        $this->descripcion = $descripcion;
    }

    public function guardar() {
        $query =
            "INSERT INTO notas2
        (id, usuario_id, titulo, descripcion, fecha)
        VALUES(null,{$this->usuario_id}, '{$this->titulo}', '{$this->descripcion}', CURDATE());";

        $resp = $this->db->query( $query );

        return $resp;
    }

}

?>