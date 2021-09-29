<?php

$localhost = "localhost";
$user = "root";
$password = "";
$banco = "condomobile";

$pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = $pdo->query("SELECT * FROM usuario");
$sql->execute();

echo $sql->rowCount();

?>