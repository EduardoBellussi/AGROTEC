<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="css/style-cadastro.css">
    <link rel="shortcut icon" type="imagex/png" href="img/icon-top.png">
    <script src="js/autenticar.js" defer></script>
</head>
<body>
    <?php include 'conexao.php'; ?>

    <div class="main-login">
        <div class="titulo">
            <h1 class="P1">Agro</h1>
            <h1 class="P2">Leme</h1>
        </div>
    </div>
    <form method="POST" action="cadastrar.php">
        <div class="card-login">
            <h1>CADASTRO</h1>
                <div class="nome">
                    <div class="coluna">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" required placeholder="Nome">
                    </div>

                    <div class="coluna">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" id="sobrenome" name="sobrenome" required placeholder="Sobrenome">
                    </div>
                </div>
                
                <div class="formulario">
                    <label for="telefone">Telefone</label>
                    <input type="tel" id="telefone" name="telefone" required placeholder="Telefone">
                </div>

                <div class="formulario">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" pattern="[a-z0-9._]+@[a-z0-9._]+\.[a-z]{2,}$" required placeholder="E-mail">
                </div>

                <div class="formulario">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" minlength="6" required placeholder="Senha">
                </div>


                    <input class="btn-login" type="submit" name="submit" value="Cadastrar-se">
                    <p class="cadastro">Já tem uma conta? <a href="login.php">Acesse aqui</a></p>
        </div>
    </form>
                
</body>
</html>