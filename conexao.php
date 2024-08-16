<?php
$host = "localhost";
$usuario = "root";
$senha = ""; 
$database = "agrotec";

// Criar conexão
$conexao = new mysqli($host, $usuario, $senha, $database);

// Verificar conexão
if ($conexao->connect_error) {
    die("Falha de conexão: " . $conexao->connect_error);
}
?>
