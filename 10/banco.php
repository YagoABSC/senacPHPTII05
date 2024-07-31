<?php

$dsn = 'mysql:host=localhost;dbname=lista_compras';
$username = 'usuario_lista_compras';
$password = 'Senha@123';

// Função para conectar ao banco de dados
function connect(){

    try{
        global $dsn, $username, $password;
        $pdo = new PDO($dsn, $username, $password);

        return $pdo;

    }catch(Exception $e){
        echo "Erro ao conectar ao banco de dados: ". $e->getMessage();
        exit;
    }
    

}

// Função para adicionar um novo item (CREATE)

function addItem($nome_produto, $quantidade){

    $pdo = connect();
    $sql = "INSERT INTO itens_compra (nome_produto, quantidade) VALUES (:nome_produto, :quantidade)";

    $stmt = $pdo->prepare($sql);
    return $stmt->execute(['nome_produto' => $nome_produto, 'quantidade' => $quantidade]);
    
}

// Função para obter todos os itens(READ)
function getAllItens(){
    $pdo = connect();
    $sql = "SELECT * FROM itens_compra";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Função para atualizar um item (UPDATE)
function updateItem($id, $comprado){
    // Implemente a lógica do update
    // utilizando de referencia a aula 09

    

}

// Função para excluir um item (DELETE)
function deleteItem($id){
    $pdo = connect();
    $sql = "DELETE FROM itens_compra WHERE id = :id";
    
    $stmt = $pdo->prepare($sql);
    return $stmt->execute(['id' => $id]);
}

?>