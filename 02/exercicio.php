<?php 
    // Exercício 1 - Índice de Massa Corporal (IMC):
    // Solicite ao usuário que insira sua altura (em metros) e peso (em quilogramas). Calcule o IMC usando a fórmula IMC = peso / (altura * altura). Exiba o resultado e informe se o usuário está abaixo do peso, com peso normal, com sobrepeso ou obeso, com base nos intervalos de IMC padrão.

    // Calcular imc
    $altura = 1.70;
    $peso = 70;
    $imc = $peso / ($altura * $altura);
    echo "Seu IMC é: $imc <br/>";

    // ----------------------------------------------------------------
    // Exercício 2 - Verificação de Pagamento:
    // Pergunte ao usuário se ele tem saldo na conta (booleano). Se tiver, pergunte se ele deseja fazer uma compra. Se a resposta for afirmativa, peça ao usuário para inserir o valor da compra (float). Verifique se o valor da compra é menor ou igual ao saldo disponível e informe se a transação foi concluída com sucesso ou se o saldo é insuficiente.

    $saldo = 29.50;
    $tem_saldo = $saldo > 0 ? $valor_compra = 29.90 : "pobre";
    echo $saldo <= $valor_compra ? "Saldo insuficiente <br/>" : "Compra concluida <br/>";


     // ----------------------------------------------------------------
    // Exercício 3 - Conversor de Temperatura:
    // Solicite ao usuário que insira uma temperatura em Celsius (float). Converta essa temperatura para Fahrenheit usando a fórmula: Fahrenheit = (Celsius * 9/5) + 32. Exiba o resultado da conversão.

    $temperaturaCelsius = 20.0;
    $temperaturaFahrenheit = ($temperaturaCelsius * 9/5) + 32;
    echo "Temperatura em Celsius é: $temperaturaCelsius °C e a temperatura em Fahrenheit é: $temperaturaFahrenheit °F<br/>";

     // ----------------------------------------------------------------
    // Exercício 4 - Verificação de Acesso:
    // Pergunte ao usuário se ele é maior de idade (booleano). Se ele for maior de idade, pergunte se ele possui autorização dos pais (booleano). Com base nas respostas, determine se o usuário tem acesso ao conteúdo restrito.
    
    $maior_idade = false;
    $temAutorizacao = true;

    echo $eMaiorDeIdade = $maior_idade || $temAutorizacao ? "Tem acesso <br/>" : "Não tem acesso<br/>";
    

     // ----------------------------------------------------------------
    // Desafio: Verificação de Números Primos:
    // Peça ao usuário que insira um número inteiro (int) e verifique se ele é um número primo. Use um booleano para indicar se o número é primo ou não.

    $usuarioNum = 71;
    $divisores = 0;

    for ($i = 2; $i < $usuarioNum; $i++) {
        if ($usuarioNum % $i === 0) {
            $divisores++;
        }

        if ($divisores !== 1){
            echo "$usuarioNum é primo <br/>";
            break;
        }else{
            echo "$usuarioNum não é primo <br/>";
            break;
        }

    }    

    // PS.: Ao invés de solicitar ao usuário de fato, pode declarar uma variável com o valor diretamente no código.
    // EX: $altura = 1.75;
?>