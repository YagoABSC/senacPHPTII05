<?php

require_once 'DatabaseRepository.php';

$acao = isset($_GET['action']) ? $_GET['action'] : '';

switch($acao) {

    case 'list':
        echo json_encode(DatabaseRepository::getAllItems());
        break;

    case 'get':
        $id = $_GET['id'];
        echo json_encode(DatabaseRepository::getItemById($id));
        break;

    case 'add':
        $data = json_decode(file_get_contents('php://input'), true);
        $success = DatabaseRepository::addItem($data['nome'], $data['telefone'], $data['email']);
        echo json_encode(['success' => $success]);
        break;

    case 'update':
        $id = $_GET['id'];
        $data = json_decode(file_get_contents('php://input'), true);
        $success = DatabaseRepository::updateItem($id, $data['nome'], $data['telefone'], $data['email']);
        break;

    case 'delete':
        $id = $_GET['id'];
        $success = DatabaseRepository::deleteItem($id);
        break;

    default:
        echo json_encode(['error' => 'Ação inválida']);
}

?>