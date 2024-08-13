<?php

echo "Olá, mundo!";

include 'banco.php';

$todos_itens = getAllItens();

echo "<pre>";
print_r($todos_itens);
echo "</pre>";
// addItem("Castanha", 10);
//deleteItem(5);
// connect();

if(addItem("Chá", 5)){
    echo "Item adicionado com sucesso! <br/>";
}

// Atualizando um item

if(updateItem(6, true)){
    echo "Item com id 6 atualizado com sucesso! <br/>";
} else{
    echo "Item com id 6 não foi atualizado ou encontrado <br/>";
}

// Excluindo um item
if(deleteItem(6)){
    echo "Item com ID 6 foi excluido com sucesso! <br/>";
}

// Exibir todos os itens pós alteração

$todos_itens_atualizados = getAllItens();

echo "<pre>";
print_r($todos_itens);

// updateItem(3, true);
// updateQuantidadeItem(3,15)

?>