<?php
require "config.php";

$id = filter_input(INPUT_GET, 'id');

if($id){

    $delClient = $pdo -> prepare('DELETE FROM clients WHERE id = :id');
    $delClient -> bindValue(':id', $id);
    $delClient -> execute();

}

header('location: index.php');
exit;