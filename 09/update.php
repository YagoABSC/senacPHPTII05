<?php

$dsn = 'mysql:host=localhost;dbname=lista_compras';
$username = 'usuario_lista_compras';
$password = 'Senha@123';

try{

    $pdo = new PDO($dsn, $username, $password);

    $sql = "UPDATE itens_compra SET comprado = :comprado WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->execute(['comprado' => true, 'id' => 7]);
    echo "Item comprado com sucesso";

} catch(PDOException $e) {
    echo 'Falha ao conectar: ' . $e->getMessage();
    exit;
}


?>