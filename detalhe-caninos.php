<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhe Produto</title>
    <link rel="stylesheet" href="css/style-detalhe-caninos.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="js/detalhe-canino.js" defer></script>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <div class="product-details">
            <div class="product-info">
                <div class="product-image">
                    <img src="img/racao1-cao-produto.png" alt="racao">
                </div>

                <div class="product-description">
                    <p><strong>Ração Magnus Todo Dia</strong> Cães Adultos Carne Premium</p>
                    <hr>

                    <div class='preço'>
                        <span class='preco-antigo'>R$ 79,90</span>
                        <span class='preco-novo'>R$ 53,99</span>
                    </div>

                    <hr>
                    <ul>
                        <li>Bio Complex;</li>
                        <li>Sem corantes artificiais;</li>
                        <li>Indicado para cães adultos;</li>
                        <li>Vitamina E e Selênio Quelato;</li>
                        <li>Prébioticos, Fibras e Extrato de Yucca.</li>
                        <li>Ômegas 3 e 6, Biotina e Zinco Quelato;</li>
                    </ul>

                    <button><a href="https://wa.me/message/FIXGPLUVZB6AK1">Consultar Estoque</a></button>

                    <div class='compartilhar'>
                        <p>Compartilhe:</p>
                        <a href="https://web.whatsapp.com/"><i class="ph-bold ph-whatsapp-logo"></i></a>
                        <a href="https://web.telegram.org/a/"><i class="ph-bold ph-telegram-logo"></i></a>
                        <a href="https://br.pinterest.com/"><i class="ph-bold ph-pinterest-logo"></i></a>
                        <a href="https://x.com/?lang=pt-br"><i class="ph-bold ph-x-logo"></i></a>
                        <a href="https://www.facebook.com/?locale=pt_BR"><i class="ph-bold ph-facebook-logo"></i></a>
                        <a href="https://www.instagram.com/"><i class="ph-bold ph-instagram-logo"></i></a>
                    </div>

                    <div class="container-avaliacao">
                        <p>Avalie-nos!</p>

                        <ul class="avaliacao">
                            <li class="star-icon ativo" data-avaliacao="1"></li>
                            <li class="star-icon" data-avaliacao="2"></li>
                            <li class="star-icon" data-avaliacao="3"></li>
                            <li class="star-icon" data-avaliacao="4"></li>
                            <li class="star-icon" data-avaliacao="5"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            

        </div>
    </div>
    

    <?php include 'footer.php'; ?>
</body>
</html>