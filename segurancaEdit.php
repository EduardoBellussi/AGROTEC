<?php
session_start();
require_once("conexao.php");

if ((!isset($_SESSION['email']) || !isset($_SESSION['senha']))) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
    exit();
}

$email_logado = $_SESSION['email'];

$sql = $conexao->prepare("SELECT * FROM cadastro WHERE email = ?");
$sql->bind_param("s", $email_logado);
$sql->execute();
$result = $sql->get_result();
$user_data = $result->fetch_assoc();

if (!$user_data) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
    exit();
}

$id_logado = $user_data['id'];
$senha_logado = $user_data['senha'];
$mensagem = '';
$tipo_mensagem = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $senha = $_POST['senha'] ?? '';
    $nova_senha = $_POST['nova-senha'] ?? '';
    $confirmar_senha = $_POST['confirmar-senha'] ?? '';

    if (password_verify($senha, $senha_logado)) {
        if ($nova_senha === $confirmar_senha) {
            $nova_senha_hash = password_hash($nova_senha, PASSWORD_DEFAULT);

            $sqlUpdate = $conexao->prepare("UPDATE cadastro SET senha = ? WHERE id = ?");
            $sqlUpdate->bind_param("si", $nova_senha_hash, $id_logado);

            if ($sqlUpdate->execute()) {
                header('Location: seguranca.php');
                exit();
            } else {
                echo "Erro ao atualizar os dados: " . $conexao->error;
            }
        } else {
            echo "As senhas não coincidem.";
        }
    } else {
        echo "Senha atual incorreta.";
    }
} else {
    header('Location: seguranca.php');
    exit();
}
?>
