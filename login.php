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
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div class="wrapper">   
        <div class="form-box">
            <div class="login-container" id="login">
                <div class="top">   
                    <header>Login</header>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Email" name="email">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" placeholder="Senha" name="senha">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="submit" class="submit" value="Entrar" name="login">
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
                    <input type="text" class="input-field" placeholder="Telefone" name="telefone">
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
                    <input type="submit" class="submit" value="Registrar" name="registrar">
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
// Inclui o arquivo de conexão
include 'conexao.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['registrar'])) {
        // Coleta dados do formulário
        $nome = $_POST['nome'] ?? null;
        $sobrenome = $_POST['sobrenome'] ?? null;
        $telefone = $_POST['telefone'] ?? null;
        $email = $_POST['email_cadastro'] ?? null;
        $senha = $_POST['senha'] ?? null;

        // Verifica se todos os campos estão preenchidos
        if ($nome && $sobrenome && $telefone && $email && $senha) {
            // Prepara a instrução SQL para inserção
            $sql = "INSERT INTO cadastro (nome, sobrenome, telefone, email, senha) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conexao->prepare($sql);
            $stmt->bind_param("sssss", $nome, $sobrenome, $telefone, $email, $senha);

            // Executa a inserção e verifica o resultado
            if ($stmt->execute()) {
                echo "Cadastro realizado com sucesso!";
            } else {
                echo "Erro ao cadastrar: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Todos os campos são obrigatórios.";
        }
    }
}
?>
</body>
</html>
