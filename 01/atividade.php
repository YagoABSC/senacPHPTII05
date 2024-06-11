<?php 

    # 1
    // Crie uma variável para nome e outra para profissão
    // Escreva a mensagem "Fulano é tal_profissao"

    echo "Exercicio 1";
    echo "<br/>";
    $nome_fulano = "Fulaneco";
    $profissao_fulano = "Programador";
    echo $nome_fulano." é ".$profissao_fulano;
    echo "<br/>";
    echo "<br/>";

    # 2
    // Crie uma variável senha e armazene "senha123"
    // Verifique se a senha tem mais de 8 caracteres
    // Se sim, diga que a senha é válida. Se não, diga que é inválida
    
    echo "Exercicio 2";
    echo "<br/>";
    $senha = "senha123";
    if (strlen($senha) > 8) {
        echo "A senha é válida";
    } else {
        echo "A senha é inválida";
    }
    echo "<br/>";
    echo "<br/>";


    // exemplo do professor
    // $valida = strlen($senha) > 8;

    // if($valida) {
    //     echo "Senha é válida!";
    // } else {
    //     echo "Senha é inválida";
    // }


    # 3
    // Corrija a palavra "ExEmPlO" para que ela fique totalmente em minúsculo
    echo "Exercicio 3";
    echo "<br/>";
    $palavra_errada = "ExEmPlO";
    echo strtolower($palavra_errada);
    echo "<br/>";
    echo "<br/>";

    # 4
    // Corrija o link "  http://exemplo.com  " para que ele não tenha espaços inválidos
    echo "Exercicio 4";
    echo "<br/>";
    echo $link_errado = "  http://exemplo.com  ";
    echo strlen($link_errado) . " caracteres";
    echo "<br/>";
    echo $link_certo = trim($link_errado);
    echo " " .strlen($link_certo) . " caracteres";
    echo "<br/>";
    echo "<br/>";

    # 5
    // Inverta a string "abcd123" e encontre a posição do caractere "3" após a inversão
    echo "Exercicio 5";
    echo "<br/>";
    echo $minha_senha = "abcd123";
    echo "<br/>";
    echo $minha_senha_invertida = strrev($minha_senha);
    echo "<br/>";
    $posicao_num = strpos($minha_senha_invertida, "3");
    echo "A posição do 3 é: $posicao_num";

?>