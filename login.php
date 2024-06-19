<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style-login.css">
    <title>Login</title>
    <script src="js/login.js" defer></script>
</head>
<body>
<?php include 'conexao.php'; ?>
    <video autoplay muted loop>
        <source src="img/5794699-uhd_4096_2160_25fps (2).mp4" type="video/mp4">
    </video>
<form action="login.php" method="GET">

    <div class="wrapper">   
        <div class="form-box">
            
            <div class="login-container" id="login">
                <div class="top">   
                    <header>Login</header>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Email">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" placeholder="Senha">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="submit" class="submit" value="Entrar">
                </div>
                <div class="two-col">
                    
                    <div class="two">
                        <label><a href="#">Esqueceu a senha?</a></label>
                    </div>
                </div>
                <div class="top">
                    <span>Não tem uma conta? <a href="#" onclick="register()">Crie aqui</a></span>
                </div>
            </div>
            <div class="register-container" id="register">
                
                <div class="two-forms">
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Nome" name="nome">
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Sobrenome" name="sobrenome">
                        <i class="bx bx-user"></i>
                    </div>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="telefone" name="telefone">
                    <i class="bx bx-envelope"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Email" name="email_cadastro">
                    <i class="bx bx-envelope"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" placeholder="Senha" name="senha">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="submit" class="submit" value="registrar" name="registrar">
                </div>
                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" id="register-check">
                        <label for="register-check">Lembrar de Mim</label>
                    </div>
                </div>
                <div class="top">
                    <span>Já tem uma conta? <a href="#" onclick="login()">Login</a></span>
                    <header></header>
                </div>
            </div>
        </div>
    </div>   
</form>
<?php 
	$nome = isset($_GET['nome']) ? $_GET['nome'] : null;
	$sobrenome = isset($_GET['sobrenome']) ? $_GET['sobrenome'] : null;
    $telefone = isset($_GET['telefone']) ? $_GET['telefone'] : null;
    $email = isset($_GET['email_cadastro']) ? $_GET['email_cadastro'] : null;
    $senha = isset($_GET['senha']) ? $_GET['senha'] : null;

    $registrar = isset($_GET['registrar']) ? $_GET['registrar'] : null;
?>   
</body>
</html>