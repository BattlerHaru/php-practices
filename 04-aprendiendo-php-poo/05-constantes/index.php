<?php

class Usuario {
    const URL_COMPLETA = 'http://localhost.com';
    public $email;
    public $password;

    public function getEmail() {
        return $this->email;
    }
    public function setEmail( $email ) {
        $this->email = $email;
    }

    public function getPassword( $password ) {
        return $this->password;

    }
    public function getPassowrd( $password ) {
        $this->password = $password;

    }

}

$usuario = new Usuario();
echo $usuario::URL_COMPLETA;

?>