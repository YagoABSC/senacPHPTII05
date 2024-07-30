<?php

$dsn = 'mysql:host=localhost;dbname=lista_compras';
$user = 'usuario_lista_compras';
$password = 'Senha@123';


try{
    $pdo = new PDO($dsn, $user, $password);
    
    $sql = "DELETE FROM itens_compra WHERE (nome_produto, quantidade) VALUES (:nome_produto, :quantidade)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nome_produto' => 'Trakinas',  'quantidade' => 12]);
    // print_r($stmt);

    echo "Item inserido com sucesso!";

}catch(PDOException $e){
    echo 'Falha na conexão '. $e->getMessage();
}

?>