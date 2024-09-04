<?php

require_once 'DatabaseRepository.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome_produto = $_POST['nome_produto'];
    $quantidade = $_POST['quantidade'];
    DatabaseRepository::addItem($nome_produto, $quantidade);
    header('Location: shopping_list.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

<div class="max-w-md mx-auto bg-white p-8 m-10 shadow-md rounded-lg">
    <h1>Cadastrar Produto</h1>
    
    <form action="add_product.php" method="post" class="space-y-4">
        <label for="nome_produto" class="block text-sm font-medium text-gray-700">Produto:</label>
        <input type="text" id="produto" name="nome_produto" required class="mt-1 p-2 border border-gray-300 rounded w-full">
        <br>
        <label for="quantidade" class="block text-sm font-medium text-gray-700">Quantidade</label>
        <input type="text" id="quantidade" name="quantidade" required class="mt-1 p-2 border border-gray-300 rounded w-full">
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Cadastrar</button>
    </form><br>

</div>

    <div class="bg-blue-500 text-white mx-auto my-5 py-2 px-4 rounded hover:bg-blue-600 w-64 text-center "><a href="shopping_list.php">< Voltar a lista de produtos</a></div>
</body>
</html>