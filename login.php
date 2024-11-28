<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="css/style-login.css">
    <link rel="shortcut icon" type="imagex/png" href="img/icon-top.png">
</head>
<body>
    <?php include 'conexao.php' ?>
    <div class="main-login">
        
        <div class="titulo">
            <h1 class="P1">Agro</h1>
            <h1 class="P2">Leme</h1>
        </div>
    <form method="POST" action="autenticar.php">
        <div class="card-login">
            <h1>Login</h1>
                <div class="formulario">
                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" required placeholder="E-mail">
                </div>
                <div class="formulario">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" required placeholder="Senha">
                </div>
                    <input class="btn-login" type="submit" name="submit" value="Entrar">
                    <p class="cadastro">Não tem uma conta? <a href="cadastro.php">Crie aqui</a></p>
        </div>
    </form>
    </div>
</body>
</html>