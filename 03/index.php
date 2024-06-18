<?php
// echo "Olá, Aula 03";

// INTRODUÇÃO A ARRAY NO PHP

// Definição de arrays
echo "Definição de arrays";
echo "<br/>";
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
echo "<hr>";

// Acessando elementos de um array
echo "Acessando elementos de um array";
echo "<br/>";
echo "A segunda fruta é: " . $frutas[1] . "<br/>";
echo "O terceiro número: " . $numeros[2] . "<br/>";
echo "David é o: " . $alunos["David"] . "° na chamada <hr>";

// Alterando elementos de um array
echo "Alterando elementos de um array";
echo "<br/>";
$frutas[0] = "Uva";
print_r($frutas);
echo "<br/>";

$numeros[4] = 100;
print_r($numeros);
echo "<br/>";

$alunos["David"] = 6;
$alunos["Arthur"] = 2;
print_r($alunos);
echo "<hr>";

// Adicionando elementos de um array
echo "Adicionando elementos de um array";
echo "<br/>";
$frutas[] = "Melão";
$numeros[] = 1000;
$alunos["Robson"] = 14;

print_r($frutas);

echo "<hr>";

// Percorrendo um array com forEach
echo "Percorrendo um array com forEach";
echo "<br/>";
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

//Funções úteis para arrays
echo "Funções úteis para arrays";
echo "<br/>";

echo "Números de elementos no array de frutas é: " . count($frutas) . "<br/>";

echo "Índice da fruta 'Morango': " . array_search("Morango", $frutas) . "<br/>";

echo "Última fruta do array: " . end($frutas) . "</br>";

echo "Array de frutas original: ";
print_r($frutas);
echo "<br/>";
echo "Array de frutas depois de reverter";
$frutas_revertidas = array_reverse($frutas);
print_r($frutas_revertidas);
?> 