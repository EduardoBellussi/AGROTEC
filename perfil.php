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
  <title>Perfil do Usuário</title>
  <link rel="stylesheet" href="css/style-perfil.css">
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <link rel="shortcut icon" type="imagex/png" href="img/icon-top.png">
  <script src="js/header-mobile.js" defer></script>
</head>
<body>
  <?php include 'header.php'; ?>
  <div class="perfil">
    <div class="perfil-esquerda">
      <img src="img/icon.png" alt="">
      <h2 id="user-name"><?php echo $user_data['nome'] . " " . $user_data['sobrenome']; ?></h2>
      <p id="user-email"><?php echo $user_data['email']; ?></p>
    </div>

    <div class="perfil-direita">
      <h2>Editar Perfil</h2>
      <form method="POST" action="perfilEdit.php">
        <label for="new-email">Alterar Email:</label>
        <input type="email" value="<?php echo $user_data['email'] ?>" id="new-email" name="new-email" placeholder="Novo email"><br>

        <label for="new-phone">Alterar Telefone:</label>
        <input type="text" value="<?php echo $user_data['telefone'] ?>" id="new-phone" name="new-phone" placeholder="Novo telefone"><br>

        <button type="submit" name="update" id="update">Salvar Alterações</button>
      </form>
    </div>
  </div>
  <?php include 'footer.php' ?>
</body>
</html>
