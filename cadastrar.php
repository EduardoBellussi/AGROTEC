<?php
require_once("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = $conexao->prepare("INSERT INTO cadastro (nome, sobrenome, telefone, email, senha) VALUES (?, ?, ?, ?, ?)");
    $sql->bind_param("sssss", $nome, $sobrenome, $telefone, $email, $senha_hash);

    if ($sql->execute()) {
        header('Location: login.php');
    } else {
        echo "Erro ao inserir dados: " . $sql->error;
    }

    $sql->close();
    $conexao->close();
}
?>