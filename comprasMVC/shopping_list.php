<?php

require_once 'DatabaseRepository.php';

$products = DatabaseRepository::getAllItems();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-center my-5">Lista de Compras</h1>
    <table class=" mx-auto bg-white border border-gray-200">
        <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <td class="py-3 px-6 text-center">Produto</td>
                <td class="py-3 px-6 text-center">Quantidade</td>
                <td class="py-3 px-6 text-center">Selecionar</td>
                <td class="py-3 px-6 text-center">Ações</td>
            </tr>
        </thead>
        <tbody class="text-gray-700 text-sm font-light">
            <?php foreach ($products as $product): ?>
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 text-left"><?= $product['nome_produto'];?></td>
                <td class="py-3 px-6 text-center"><?= $product['quantidade'];?></td>
                <td class="py-3 px-6 text-center"><input type="checkbox" name="comprar"></td>
                <td class="py-3 px-6 text-center">

                    <a href="edit_product.php?id=<?= $product['id'];?>" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">Alterar</a>

                    <a href="delete_product.php?id=<?= $product['id'];?>" onclick="return confirm('Tem certeza que deseja deletar esse item?');" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Deletar</a>
                </td>
            </tr>
            
            <?php endforeach; ?>

        </tbody >
    </table>
    
    <div class="bg-blue-500 text-white mx-auto my-5 py-2 px-4 rounded hover:bg-blue-600 w-48 text-center "><a href="add_product.php" class="text-center">Cadastrar Produto </a></div>
   

</body>
</html>