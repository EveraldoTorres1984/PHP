<?php
require 'config.php';
require 'dao/UsuarioDaoSqlServer.php';

$usuarioDao = new UsuarioDaoSqlServer($conn);


$id = filter_input(INPUT_GET, 'id');

if ($id) {

    $usuarioDao->delete($id);   
    
} 

header("Location: index.php");
    exit;
