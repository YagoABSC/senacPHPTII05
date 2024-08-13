<?php

require_once 'DatabaseREpository.php';
$database = new DatabaseRepository();

$acao = $_GET['acao'];

if($acao == 'listar') {
    echo $database->getAllItems();
} else if($acao == 'adicionar') {
    echo $database->addItem();
} else{
    echo "Ação inválida!";
}
?>