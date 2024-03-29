<?php


require 'config.php';
require 'dao/UsuarioDaoSqlServer.php';

$usuarioDao = new UsuarioDaoSqlServer($conn);

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($id && $name && $email) {
    $usuario = new Usuario();
    $usuario->setId($id);
    $usuario->setNome($name);
    $usuario->setEmail($email);

    $usuarioDao->update($usuario);
        
    header("location: index.php");
} else {
    header("location: editar.php?id=".$id);
    exit;
}
