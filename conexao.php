
<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'agrotec';

$conexao = new mysqli($host, $usuario, $senha, $database);

if ($conexao->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
}

?>
<!-- create table cadastro(id INT PRIMARY KEY, nome VARCHAR(255), sobrenome VARCHAR(255), telefone VARCHAR(255), email VARCHAR(255), senha VARCHAR(255)); -->
