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
    $sql = "SELECT * FROM cadastro WHERE email = '$email_logado'";
    $result = $conexao->query($sql);
    $user_data = mysqli_fetch_assoc($result);
    $id_logado = $user_data['id'];
    


    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
        $novo_email = $_POST['new-email'] ?? '';
        $novo_telefone = $_POST['new-phone'] ?? '';
        if (!empty($novo_email) && !empty($novo_telefone)) {
            $_SESSION['email'] = $novo_email;
            $sqlUpdate = "UPDATE cadastro SET email = '$novo_email', telefone = '$novo_telefone' WHERE id='$id_logado'";  
            if ($conexao->query($sqlUpdate) === TRUE) {
                header('Location: perfil.php');
                exit();
            } else {
                echo "Erro ao atualizar os dados: " . $conexao->error;
            }
        }else {
            echo "Erro: Preencha todos os campos.";
        }
    }else{
        header('Location: perfil.php');
    }
?>