<?php
//dsn = database string name
$dsn = 'mysql:host=localhost;dbname=lista_compras';
$user = 'usuario_lista_compras';
$password = 'Senha@123';

// Documentação PDO PHP - https://www.php.net/manual/pt_BR/pdo.connections.php
// $dbh = new PDO($dsn, $user, $password);

try {
    $dbh = new PDO($dsn, $user, $password);
    echo "Conectado ao banco";
} catch (PDOException $e) {
    // tentar reconectar após algum intervalo, por exemplo
    echo "Erro ao tentar se contectar do ao banco:
      <br/>";
    echo $e;
    exit;
}

?>