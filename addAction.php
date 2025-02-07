<?php
require "config.php";
require "getData.php";

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$tel = filter_input(INPUT_POST, 'phone', FILTER_VALIDATE_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($name && $email){

    $findEmail = $pdo -> prepare('SELECT * FROM clients WHERE email= :email');
    $findEmail -> bindValue(':email', $email);
    $findEmail->execute();

    if($findEmail->rowCount()===0){
        $insertData = $pdo -> prepare('INSERT INTO clients (nome, telefone, email) VALUES (:nome, :tel, :email)');
        $insertData->bindValue(':nome', $name);
        $insertData->bindValue(':tel', $tel);
        $insertData->bindValue(':email', $email);
        $insertData->execute();

        header('location: index.php');
        exit;
    }else{
        header('location: add.php');
        exit;
    }
    
}