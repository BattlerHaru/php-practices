<?php

require_once 'config/database.php';

class ModeloBase {

    public $db;

    public function __construct() {
        $this->db = database::connect();
    }

    public function getTodos( $tabla ) {
        $query = $this->db
            ->query(
                "SELECT *
        FROM $tabla
        ORDER BY id ASC
        " );

        return $query;
    }
}

?>