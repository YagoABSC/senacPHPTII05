<?php

// Tenho o endereço da API
$URL = "http://tit0676503w10-1/aecio/server/mock_data.php";

// Obter os dados que essa página me entrega
$dados = file_get_contents($URL);

// Converto os dados para PHP
$dados_do_sensor = json_decode($dados, true);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de Temperaturas</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Tempo</th>
                <th>Temperatura</th>
                <th>Umidade (%)</th>
            </tr>
        </thead>
        <tbody>
            
                <?php foreach ($dados_do_sensor as $entrada): ?>
                <tr>
                    <th><?php echo $entrada['timestamp'] ?></th>
                    <th><?php echo $entrada['temperature'] ?></th>
                    <th><?php echo $entrada['humidity'] ?></th>
                </tr>

                <?php endforeach;?>
            
        </tbody>
    </table>
</body>
</html>