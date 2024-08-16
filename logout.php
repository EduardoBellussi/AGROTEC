<?php
// Inicia a sessão
session_start();

// Verifica se o botão de logout foi clicado
if (isset($_POST['logout'])) {
    // Limpa todas as variáveis de sessão
    $_SESSION = array();

    // Se também deseja destruir o cookie de sessão
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // Destrói a sessão
    session_destroy();

    // Redireciona para a página de login
    header("Location: login.php");
    exit();
}
?>
