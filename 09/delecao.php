<?php

$dsn = 'mysql:host=localhost;dbname=lista_compras';
$user = 'usuario_lista_compras';
$password = 'Senha@123';


try{
    $pdo = new PDO($dsn, $user, $password);
    
    $sql = "DELETE FROM itens_compra WHERE id = :id";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => 5]);
    // print_r($stmt);

    echo "Item inserido com sucesso!";

}catch(PDOException $e){
    echo 'Falha na conexão '. $e->getMessage();
}

?>