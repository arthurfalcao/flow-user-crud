<?php

$host = "localhost";
$db_name = "id3384319_db_crud";
$username = "root";
$password = "";

try {
	$conexao = new PDO("mysql:host={$host}; dbname={$db_name}", $username, $password);
} catch (PDOException $erro) {
	echo "Erro na conexão: " . $erro->getMessage();
}

require_once 'funcoes.php';
?>
