<?php
require "config.php";

$sql = $pdo -> query("SELECT * FROM clients");
$sql -> fetchAll(PDO::FETCH_ASSOC);
$sql -> execute();