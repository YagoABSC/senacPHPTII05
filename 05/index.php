<?php

//Estrutura de repetição

// Exemplo 1: For
echo "Exemplo 1: For <br>";
// for(COMEÇA EM; ENQUANTO; DE QUANTO EM QUANTO) {
// }

for ($i = 1; $i <= 5; $i++){
    echo "Numero $i <br>";
}
// Coding game
for ($i = 1; $i <= $n; $i++){
    echo str_repeat(" ",$i) . "$water <br>";
}
echo "<hr>";

// Exemplo 2: White
echo "Exemplo 2: White <br>";

$contador = 1;

while ($contador <= 5){
    echo "Numero $contador <br>";
    $contador++;
}

echo "<hr>";

// Exemplo 3: Do While
echo "Exemplo 3: Do While <br>";

$cont_do = 1;

do {
    echo "Número $cont_do <br>";
    $cont_do++;
} while ($cont_do <= 5);
echo "<hr>";

// Exemplo 4: ForEach
echo "Exemplo 4: ForEach <br>";
$array_vogais = ["a", "e", "i", "o", "u"];

foreach($array_vogais as $vogal){
    echo "Vogal: $vogal <br>";
}

for ($i=0; $i <= count($array_vogais); $i++) { 
    echo "Vogal: $vogal <br>";
}

?>