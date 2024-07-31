<?php

echo "Olá, mundo!";

include 'banco.php';

$todos_itens = getAllItens();

echo "<pre>";
print_r($todos_itens);
echo "</pre>";
// connect();

?>