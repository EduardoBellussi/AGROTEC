<?php
  session_start();
  require_once("conexao.php");
  if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
  }
  $email_logado = $_SESSION['email'];

  $sql = "SELECT * FROM cadastro WHERE email = '$email_logado'";
  $result = $conexao->query($sql);

  $user_data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Segurança</title>
  <link rel="stylesheet" href="css/style-seguranca.css">
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <link rel="shortcut icon" type="image/png" href="img/icon-top.png">
  <script src="js/header-mobile.js" defer></script>
  <script src="js/deletar-conta.js" defer></script>
</head>
<body>
  <?php include 'header.php'; ?>

  <div class="perfil">
    <div class="perfil-esquerda">
      <img src="img/icon.png" alt="">
      <h2 id="user-name"><?php echo $user_data['nome'] . " " . $user_data['sobrenome']; ?></h2>
      <p id="user-email"><?php echo $user_data['email']; ?></p>
      <form method="POST" action="deletar.php" onsubmit="return confirmarDelete();">
        <button type="submit" class="delete-button">Deletar Conta</button>
      </form>
    </div>

    <div class="perfil-direita">
      <h2>Segurança</h2>
      <form method="POST" action="segurancaEdit.php">
        <label for="senha">Senha Atual</label>
        <input type="password" id="senha" name="senha" required placeholder="Senha Atual"><br>

        <label for="nova-senha">Nova Senha</label>
        <input type="password" id="nova-senha" name="nova-senha" required placeholder="Nova Senha"><br>

        <label for="confirmar-senha">Confirmar Senha</label>
        <input type="password" id="confirmar-senha" name="confirmar-senha" required placeholder="Confirmar Senha"><br>

        <button type="submit" name="update" id="update">Salvar Alterações</button>
      </form>
    </div>
  </div>

  <?php include 'footer.php'; ?>
</body>
</html>
