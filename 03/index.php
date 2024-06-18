<?php
// echo "Olá, Aula 03";

// INTRODUÇÃO A ARRAY NO PHP

// Definição de arrays

$frutas = array( "Maçã", "Banana", "Laranja", "Morango");

print_r($frutas);
echo "<br/>";
echo $frutas[2];
echo "<br/>";

$numeros = [2, 5, 6, 9];
print_r($numeros);
echo "<br/>";
echo $numeros[3];
echo "<br/>";

$alunos = array("Yago" => 18, "Arthur" => 01, "David" => 07, "Thamiris" => 17, "Stephanie" => 15);
print_r($alunos);
echo "<br/>";

// Acessando elementos de um array

echo "A segunda fruta é: " . $frutas[1] . "<br/>";
echo "O terceiro número: " . $numeros[2] . "<br/>";
echo "David é o: " . $alunos["David"] . "° na chamada <br/>";

// Alterando elementos de um array

$frutas[0] = "Uva";
print_r($frutas);
echo "<br/>";

$numeros[4] = 100;
print_r($numeros);
echo "<br/>";

$alunos["David"] = 6;
$alunos["Arthur"] = 2;
print_r($alunos);
echo "<br/>";

// Adicionando elementos de um array

$frutas[] = "Melão";
$numeros[] = 1000;
$alunos["Robson"] = 14;

print_r($frutas);
echo "<br/>";

echo "<hr>";

// Percorrendo um array com forEach

echo "Lista de frutas: ";
foreach($frutas as $fruta){
    echo $fruta . ", ";
}

echo "<br/>";

echo "Lista de números: ";
foreach($numeros as $numero){
    echo $numero . ", ";
}

echo "<br/>";

echo "Lista de alunos: ";
foreach($alunos as $nome => $nChamada){
    echo $nome . " é o " . $nChamada . "° da chamada. <br/>";
}

echo "<hr>";

?> 