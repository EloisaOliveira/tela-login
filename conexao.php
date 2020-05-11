<?php

$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "loja";

// orientada a objetos com pdo
$pdo = new PDO("mysql:dbname".$banco."; host=".$localhost, $user, $passw);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//sistemas
$sql = $pdo->query("SELECT * FROM usuarios");
$sql->execute();

?>