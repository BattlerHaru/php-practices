<?php

class database {
    public static function connect() {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $database = 'phpmysql';

        $conn = new mysqli(
            $host,
            $user,
            $pass,
            $database );

        $query = "SET NAMES 'utf8'";

        $conn->query( $query );

        return $conn;
    }
}

?>