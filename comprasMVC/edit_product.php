<?php

require_once 'DatabaseRepository.php';

$id = $_GET['id'];
$product = DatabaseRepository::getItemById($id);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $produto = $_POST['nome_produto'];
    $quantidade = $_POST['quantidade'];
    DatabaseRepository::updateItem($id, $produto, $quantidade);
    header('Location: shopping_list.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>
<body>
    <h1>Editar Produto</h1>

    <form action="edit_product.php?id=<?= $product['id'];?>" method="post" class="space-y-4">
        <label for="produto" class="block text-sm font-medium text-gray-700">Produto:</label>
        <input type="text" id="produto" name="produto" required class="mt-1 p-2 border border-gray-300 rounded w-full" value="<?= $product['nome_produto'];?>">
        <br>

        <label for="quantidade" class="block text-sm font-medium text-gray-700">Quantidade</label>
        <input type="text" id="quantidade" name="quantidade" required class="mt-1 p-2 border border-gray-300 rounded w-full" value="<?= $product['quantidade'];?>">
        
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Editar</button>
    </form><br>
    
    <a href="shopping_list.php">< Voltar a lista de produtos</a>
</body>
</html>