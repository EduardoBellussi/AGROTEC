<?php
  session_start();
  require_once("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $email_logado = $_SESSION['email'];
    $sql = "SELECT * FROM cadastro WHERE email = '$email_logado'";
    $result = $conexao->query($sql);
  
    $user_data = mysqli_fetch_assoc($result);
    $id_logado = $user_data['id'];

    $comentario = trim($_POST['comentario']);

    if (empty($comentario)) {
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?erro=ComentarioVazio");
        exit();
    }

    $sql = "INSERT INTO comentario (id, comentario, id_cadastro) VALUES ('','$comentario','$id_logado')";

    if ($conexao->query($sql) === TRUE) {
        $previousPage = $_SERVER['HTTP_REFERER'] ?? 'index.php';
        header("Location: $previousPage");
        exit();
    } else {
        echo "Erro ao salvar o comentário: " . $conexao->error;
    }


    $conexao->close();
}           
?>