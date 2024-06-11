<?php 
// Números e Operadores

# Operações básicas
$num1 = 10;
$num2 = 5;

# Soma
$soma = $num1 + $num2;
echo "Soma: $soma <br/>";

# Substração
$subtracao = $num1 - $num2;
echo "Subtração: $subtracao <br/>";

# Multiplicação
$multiplicacao = $num1 * $num2;
echo "Multiplicação: $multiplicacao <br/>";

# Divisão
$divisao = $num1 / $num2;
echo "Divisão: $divisao <br/>";

//  Operações incrementais e drecrementais
$num = 8;

# Incremento
$num++;
echo "Incremento: $num <br/>";

# Decremento
$num--;
echo "Decremento: $num <br/>";

// Operadores de comparação

$num1 = 5;
$num2 = 12;

# Igual a #1
echo "Igual a: ";
if($num1 == $num2){
    echo "verdadeiro <br/>";
} else{
    echo "falso <br/>";
}

# Igual a #2
$resultado = $num1 == $num2;
echo "Igual a: $resultado <br/>";

# Igual a #3
echo "Igual a: ";
echo $num1 == $num2 ? "verdadeiro <br/>" : "falso <br/>";

# Diferente de
echo "Igual a: ";
echo $num1 != $num2 ? "verdadeiro <br/>" : "falso <br/>";

# Maior que / Menor que
echo "Igual a: ";
echo $num1 > $num2 ? "verdadeiro <br/>" : "falso <br/>";

# Menor igual / Maior igual
echo "Igual a: ";
echo $num1 <= $num2 ? "verdadeiro <br/>" : "falso <br/>";

//  Operadores lógicos:
echo "Operadores lógicos: <br/>";
$condicao1 = true;
$condicao2 = false;

# E lógico (AND)
echo "E lógico (AND): ";
echo $condicao1 && $condicao2 ? "verdadeiro <br/>" : "falso<br/>";

# Ou lógico (OR)
echo "E lógico (OR): ";
echo $condicao1 || $condicao2 ? "verdadeiro <br/>" : "falso<br/>";

# Não lógico (NOT)
echo "E lógico (OR): ";
echo !$condicao2 ? "verdadeiro <br/>" : "falso<br/>";


?>