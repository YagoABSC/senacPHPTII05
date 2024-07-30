<?php
//dsn = database string name
$dsn = 'mysql:host=localhost;dbname=loja';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = "SELECT * FROM lista_compras.itens_compra";
    $stmt = $dbh->query($sql); //statament
    
    
    $result = $stmt->fetchAll(PDO:: FETCH_ASSOC);
    // fetchAll() retorna todos os resultados como um array associativo
    // fetch() retorna apenas o primeiro resultado como um array associativo

    echo '<pre>';
    print_r($result);
    echo '</pre>';
    
} catch (PDOException $e) {
    // tentar reconectar após algum intervalo, por exemplo
    echo "Erro ao tentar se contectar do ao banco:<br/>";
    echo $e;
    exit;
}

?>