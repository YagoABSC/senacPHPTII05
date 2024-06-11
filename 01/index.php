<?php
    // O comando abaixo mostra os dados
    echo "<h1>Olá, Mundo</h1><br> <h2>muito prazer</h2>";

    // Como declarar variaveis
    $nome = "Yago";
    $sobrenome = "Aparecido";
    $idade = 20;
    // $altura = 1.70;

    // O comando abaixo mostra os dados na variavel
    echo $nome . $sobrenome . $idade;
    echo "<br>";

    // combinando variaveis em uma variável
    $nomeCompleto = $nome . " " . $sobrenome;    
    echo $nomeCompleto;

    // Para obter o comprimento de uma string em PHP, usamos o strlen()
    echo strlen($nomeCompleto); // Saida é 12, pois o PHP conta acentos como um caractere
    echo "<br>";

    // Para substituir partes de uma string, usamos a função str_replace()
    $novo_nome = str_replace("Aparecido", "Terra", $nomeCompleto);
    echo $novo_nome;
    echo "<br>";

    // strtolower(): Converte uma string para letras minusculas
    // strtoupper(): converte uma string para letras maiusculas
    $texto_minusculo = strtolower("KKKKKKK");
    $texto_maiusculo = strtoupper("llllllll");
    
    echo $texto_maiusculo;
    echo "<br>";
    echo $texto_minusculo;
    echo "<br>";

    // trim(): Remove espaços em branco no incio e no final de uma string
    $nome_trim = "  Yago  ";
    echo strlen($nome_trim);
    echo "<br>";
    $texto_sem_espacos = trim($nome_trim);
    echo strlen($texto_sem_espacos);  
    echo "<br>";
    
    // strpos(): Encontra a primeira posicão de uma string especifica
    $lista_alunos = "joao, maria, fernando, natalia, maria";
    $posicao_maria = strpos($lista_alunos, "maria");
    echo "A posição de maria é: $posicao_maria";
    echo "<br>";

    // strrev(): Inverter uma string
    $texto = "Socorram me subi no onibus em marrocos";
    echo $texto;
    echo "<br>";
    $texto_invertido = strrev($texto);
    echo $texto_invertido;
?>
<!-- <h2>Olá, <?php echo $nomeCompleto ?></h2> -->