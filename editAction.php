<?php
require "config.php";

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone', FILTER_VALIDATE_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($id && $name && $email){
    $updateClient = $pdo -> prepare ('UPDATE clients SET nome = :name, telefone = :phone, email = :email WHERE id = :id');
    $updateClient -> bindValue(':id', $id);
    $updateClient -> bindValue(':name', $name);
    $updateClient -> bindValue(':phone', $phone);
    $updateClient -> bindValue(':email', $email);
    $updateClient -> execute();

    header('location: index.php');
    exit;
}else{
    header('location: index.php');
    exit;
}