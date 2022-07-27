<?php


//Inserção de Dados
require 'config.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($name && $email) {

    $sql = $conn->prepare("SELECT * FROM tbl_teste WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if ($sql->rowCount() === 0) {
        $sql = $conn->prepare("INSERT INTO tbl_teste(nome, email) VALUES (:name, :email)");
        $sql->bindValue(':name', $name);
        $sql->bindValue(':email', $email);
        $sql->execute();

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
