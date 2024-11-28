<?php 
    if(!empty($_GET['id'])){
        require_once("conexao.php");
        
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM produto WHERE id=$id";

        $result = $conexao->query($sqlSelect);
        if($result -> num_rows > 0){
            while($user_data = mysqli_fetch_assoc($result)){
                $nome = $user_data['nome'];
                $img = $user_data['img'];
                $marca = $user_data['marca'];
                $linha = $user_data['linha'];
                $descricao = $user_data['descricao'];
                $peso = $user_data['peso'];
                
            }
        }else{
            header('Location: felinos.php');
        }
    }else{
        header('Location: felinos.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhe Produto</title>
    <link rel="stylesheet" href="css/style-detalhe-caninos.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="js/detalhe-canino.js" defer></script>
    <link rel="shortcut icon" type="imagex/png" href="img/icon-top.png">
    <script src="js/header-mobile.js" defer></script>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <div class="product-details">
            <div class="product-info">
                <div class="product-image">
                <?php
                    if (!empty($img) && file_exists($img)) {
                        echo "<img src=\"$img\" alt=\"Imagem do produto\">";
                    } else {
                        echo '<p>Nenhuma imagem disponível.</p>';
                    }                    
                ?>

                </div>

                <div class="product-description">
                    <p><strong>Ração <?php echo $marca . " " . $linha ?></strong> <?php echo $nome ?></p>
                    <hr>

                    <div class='preço'>
                        <span class='preco-antigo'>R$ 79,90</span>
                        <span class='preco-novo'>R$ 53,99</span>
                    </div>

                    <hr>
                    <?php echo $descricao ?>

                    

                    <div class='compartilhar'>
                        <p>Compartilhe:</p>
                        <a href="https://wa.me/?text=Ol%C3%A1%2C%20estou%20compartilhando%20esta%20p%C3%A1gina%3A%20https%3A%2F%2Fexemplo.com" class="whatsapp-button" target="_blank"><i class="ph-bold ph-whatsapp-logo"></i></a>
                        <a href="https://web.telegram.org/a/"><i class="ph-bold ph-telegram-logo"></i></a>
                        <a href="https://br.pinterest.com/"><i class="ph-bold ph-pinterest-logo"></i></a>
                        <a href="https://x.com/?lang=pt-br"><i class="ph-bold ph-x-logo"></i></a>
                        <a href="https://www.facebook.com/?locale=pt_BR"><i class="ph-bold ph-facebook-logo"></i></a>
                        <a href="https://www.instagram.com/"><i class="ph-bold ph-instagram-logo"></i></a>
                    </div>

                    <!-- <div class="container-avaliacao">
                        <p>Avalie-nos!</p>

                        <ul class="avaliacao">
                            <li class="star-icon ativo" data-avaliacao="1"></li>
                            <li class="star-icon" data-avaliacao="2"></li>
                            <li class="star-icon" data-avaliacao="3"></li>
                            <li class="star-icon" data-avaliacao="4"></li>
                            <li class="star-icon" data-avaliacao="5"></li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <br>
            

        </div>
    </div>
    

    <?php include 'footer.php'; ?>
</body>
</html>