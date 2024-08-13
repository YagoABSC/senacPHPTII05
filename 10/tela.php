<?php

echo "Olá, mundo!";

include 'banco.php';

$todos_itens = getAllItens();

echo "<pre>";
print_r($todos_itens);
echo "</pre>";
//addItem("Amendoim", 10);
//deleteItem(5);
// connect();

// updateItem(3, true);
updateQuantidadeItem(3,15)

?>