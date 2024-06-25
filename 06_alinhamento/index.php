<?php

    //// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO


// Desafio 1: Contagem Regressiva
/*
    Crie um programa que solicite ao usuário um número inteiro positivo N e realize uma contagem regressiva até zero.
    Após cada contagem, exiba a mensagem "Falta X segundos" onde X representa o número de segundos restantes para chegar a zero.
*/

echo "Desafio 1: Contagem Regressiva <br>";
// Solução com for
$numero = 5; //Número fornecido pelo usuário.

// Solução com for
for ($i=0; $i <= 5; $i++) {
    echo "Contagem Regressiva: " . $numero-$i . "<br>"; 
    echo "Faltam " . $numero - $i . " segundos <br>";
}

echo "<hr>";

// Solução com while
while ($numero > -1) {
    echo "Contagem Regressiva: ". $numero. "<br>";
    echo "Faltam ". $numero. " segundos <br>";
    $numero--;
}

echo "<hr>";

// Solução com do-while
$n = 5;
do {
    echo "Contagem Regressiva: ". $n. "<br>";
    echo "Faltam ". $n . " segundos <br>";
    $n--;
} while ($n > -1);

echo "<hr> <hr>";

// Desafio 2: Tabuada
/*
    Crie um programa que exiba a tabuada de multiplicação de um número fornecido pelo usuário.
    A tabuada deve ser exibida de 1 até 10.
*/

echo "Desafio 2: Tabuada <br>";

$tabuada_numero = 8;

// Solução com o FOR

for ($i = 1; $i <= 10; $i++) {
    echo $tabuada_numero. " x ". $i. " = ". $tabuada_numero * $i. "<br>";
}

echo "<hr>";

// Solução com while
$cont_tabuada = 1;
while ($cont_tabuada <= 10){
    echo $tabuada_numero. " x ". $cont_tabuada. " = ". $tabuada_numero * $cont_tabuada. "<br>";
    $cont_tabuada++;
}

echo "<hr> <hr>";

// Desafio 3: Sequência Fibonacci
/*
    A sequência de Fibonacci é uma sequência de números inteiros em que cada termo é a soma dos dois anteriores.
    Crie um programa que solicite ao usuário um número N e exiba os N primeiros termos da sequência de Fibonacci.
*/

echo "Desafio 3: Sequência Fibonacci <br>";

$sequencia_fibonacci = 10;

// Solução com for


// Solução com while

echo "<hr> <hr>";

//// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO

// Atividade 1: Verificar se a soma de A + B é igual a C

echo "Atividade 1: Verificar se a soma de A + B é igual a C <br>";
/*
    Solicita três números inteiros ao usuário (A, B e C) e verifica se a soma de A e B é igual a C.
*/
$A = 5;
$B = 10;
$C = 15;

if ($A + $B == $C ) {
    echo "A soma de " . $A . "+" . $B . " é igual ao valor da variável C(" . $C . ")"; ;
} else{
    echo "A soma de ". $A. "+". $B. " não é igual ao valor da variável C(" . $C .  ")";
}

echo "<hr> <hr>";

// Atividade 2: Calcular o quadrado de um número
echo "Atividade 2: Calcular o quadrado de um número <br/>";
/*
    Solicita ao usuário um número inteiro e calcula o quadrado desse número.
*/
$numero = 8;

// Implementação do Cálculo do Quadrado
$quadrado = $numero * $numero;
echo "A raiz quadrada de ". $numero . " é: ". $quadrado;

echo "<hr> <hr>";

// Atividade 3: Verificar se um número é par ou ímpar
echo "Atividade 3: Verificar se um número é par ou ímpar <br/>";
/*
    Solicita ao usuário um número inteiro e verifica se ele é par ou ímpar.
*/
$numero = 15;
// Implementação da Verificação de Paridade

if ($numero % 2 == 0) {
    echo "O número ". $numero. " é par";
} else {
    echo "O número ". $numero. " é ímpar";
}

echo "<hr> <hr>";

// Atividade 4: Calcular a média de três números

echo "Atividade 4: Calcular a média de três números <br/>";
/*
    Solicita ao usuário três números e calcula a média aritmética entre eles.
*/
$numero1 = 10;
$numero2 = 15;
$numero3 = 20;

// Implementação do Cálculo da Média

$media = ($numero1 + $numero2 + $numero3) / 3;
echo "A média entre ". $numero1. ", ". $numero2. " e ". $numero3. " é: ". $media;

echo "<hr> <hr>";

// Atividade 5: Verificar se um número é múltiplo de outro

echo "Atividade 5: Verificar se um número é múltiplo de outro <br/>";
/*
    Solicita ao usuário dois números e verifica se o primeiro é múltiplo do segundo.
*/
$numeroMultiplo = 15;
$multiploDe = 5;
// Implementação da Verificação de Múltiplo

if ($numeroMultiplo % $multiploDe == 0) {
    echo "O número ". $numeroMultiplo. " é múltiplo de ". $multiploDe;
} else {
    echo "O número ". $numeroMultiplo. " não é múltiplo de ". $multiploDe;
}

echo "<hr> <hr>";

//// Atividade 6: Conversão de Horas em Minutos
/*
    Solicita ao usuário a quantidade de horas e minutos e converte isso para o equivalente total de minutos.
*/

$horas_string = "01:30";

// Implementação de Conversão de Horas em Minutos

// Deixei de lado, comecei a rodar várias vezes no mesmo lugar sem encontrar uma saída e usando funções de forma estranha.

$excluir = explode(":", $horas_string);

$horas = substr($horas_string, 0, 1);

$minutos = substr($horas_string, 2, 3);

$minutagem = intval($horas);

echo "O equivalente total em minutos de $horas_string é: " . $horas . " minutos <br>";

echo "<hr> <hr>";

/// Atividade 7: Desenho de Pirâmide
echo "Atividade 7: Desenho de Pirâmide <br>";
/*
    Solicita ao usuário a altura de uma pirâmide (número de linhas) e desenha-a na tela usando asteriscos (*) em cada linha.
*/
$altura_piramide = 5;
// Implementação de Desenho de Pirâmide

for ($i = 1; $i <= $altura_piramide; $i++) {
    for ($piramide = 1; $piramide <= $i; $piramide++) {
        echo "*";
    }
    echo "<br>";
}

echo "<hr> <hr>";

//// Atividade 8: Contagem de Dígitos em um Número
echo "Atividade 8: Contagem de Dígitos em um Número <br/>";
/*
    Solicita ao usuário um número inteiro positivo e conta quantos dígitos esse número possui.
*/
$numeroDigitos = 2048;
// Implementação de Contagem de Dígitos em um Número

echo "O número de digitos é: " . strlen($numeroDigitos);

echo "<hr> <hr>";

//// Atividade 9: Verificação de Palíndromo
echo "Atividade 9: Verificação de Palíndromo <br/>";
/*
    Solicita ao usuário uma palavra e verifica se ela é um palíndromo.
*/
$palavra = "abbabba";

// Implementação de Verificação de Palíndromo

if ($palavra == strrev($palavra)) {
    echo "A palavra ". $palavra. " é um palíndromo";
} else {
    echo "A palavra ". $palavra. " não é um palíndromo";
}

echo "<hr> <hr>";

//// Atividade 10: Ordenação de Números
/*
    Solicita ao usuário três números inteiros e os exibe em ordem crescente.
*/
$numero1 = 25;
$numero2 = 1;
$numero3 = 7;

// Implementação de Ordenação de Números

$numeros = array();


?>