<?php

// 1 - Crie um array contendo os dias da semana. Em seguida, exiba o terceiro dia da semana.

$dias_semana = ["Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado", "Domingo"];

echo $dias_semana[2];
echo "<hr>";


// 2 - Crie um array contendo meses do ano. Altere o valor do último elemento para Onzembro"

$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

$meses[11] = "Onzembro";
print_r($meses);

// $meses[count($meses)-1] = "Onzembro";
// echo "O ultimo mês é: " . end($meses);
echo "<hr>";

// 3 - Crie um array vazio. Adicione os números de 1 a 5 no array. Depois, adicione o número 6 ao final do array"

$vazio = [];

for ($i = 1; $i <= 5; $i++) {
    $vazio[] = $i;
}

$vazio[] = 6;

print_r($vazio);
echo "<hr>";


// 4 - Utilize um loop foreach para percorrer o array de meses do ano e exibir cada um.

foreach ($meses as $mes) {
    echo $mes . "<br>";
}
echo "<hr>";


// 5 - Conte quantos elementos o array de dias de semana possui.

echo "Uma semana possui: " . count($dias_semana) . " dias. <br>";

echo "<hr>";

// 6 - Utilize a função array_search() para econtrar a posicao do dia "Sábado" no array e exiba o resultado.

echo "A posição do dia 'Sábado' é: " . array_search("Sábado", $dias_semana)  . "<br/>";


?>