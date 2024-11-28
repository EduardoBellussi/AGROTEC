<?php
    session_start();
    require_once("conexao.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        
        $sql = $conexao->prepare("SELECT * FROM cadastro WHERE email = ?");
        $sql->bind_param("s", $email); 
        $sql->execute();
        $result = $sql->get_result();
        
        if ($result->num_rows < 1) {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
            exit();
        } else {
            $user = $result->fetch_assoc();
            
            if (password_verify($senha, $user['senha'])) {
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $user['senha']; 
                header('Location: index.php');
                exit();
            } else {
                unset($_SESSION['email']);
                unset($_SESSION['senha']);
                header('Location: login.php');
                exit();
            }
        }
    } else {
        header('Location: login.php');
        exit();
    }
?>
