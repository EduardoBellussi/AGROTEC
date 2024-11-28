<?php
    session_start();
    require_once("conexao.php");
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
        exit();
    }
    $email_logado = $_SESSION['email'];
    
    $stmt = $conexao->prepare("DELETE FROM cadastro WHERE email = ?");
    $stmt->bind_param("s", $email_logado);

    if ($stmt->execute()) {
        session_destroy();
        echo "<script>
            alert('Conta deletada com sucesso.');
            window.location.href = 'index.php';
        </script>";
        exit();
    } else {
        echo "Erro ao deletar a conta: " . $stmt->error;
    }

    $stmt->close();
?>