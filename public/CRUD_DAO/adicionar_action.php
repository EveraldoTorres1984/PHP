<?php

require 'config.php';
require 'dao/UsuarioDaoSqlServer.php';

$usuarioDao = new UsuarioDaoSqlServer($conn);

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($name && $email) {

    if ($usuarioDao->findByEmail($email) === false) {
        $novoUsuario = new Usuario();
        $novoUsuario->setNome($name);
        $novoUsuario->setEmail($email);
        
        $usuarioDao->add($novoUsuario);

        header("location: index.php");
        exit;
    } else {        
        header("location: adicionar.php");
        exit;
    }
} else {    
    header("location: adicionar.php");
    exit;
}
