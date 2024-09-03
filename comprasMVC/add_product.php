<?php

require_once 'DatabaseRepository.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $produto = $_POST['nome_produto'];
    $quantidade = $_POST['quantidade'];
    DatabaseRepository::addItem($produto, $quantidade);
    header('Location: list_contacts.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>