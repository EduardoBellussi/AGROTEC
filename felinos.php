<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="css/style-felinos.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="shortcut icon" type="imagex/png" href="img/icon-top.png">
    <script src="js/header-mobile.js" defer></script>
    <script src="js/pesquisar-prod.js" defer></script>
</head>
<body>
    <?php include 'header.php'; ?>


    <div class="search-content">
        <div class="search-bar">
        <i class="ph ph-magnifying-glass"></i>
            <input type="search" id="search" placeholder="Pesquise aqui" onkeyup="filterProducts()">
        </div>
        <div class="search-filter">

        </div>
    </div>

    <section class="main-content">
    <div id="not-found" class="not-found">Nenhum produto encontrado</div>
        
        <div class="produto prod1">
            <img class="img-racao" src="img/racao-felino-1.webp" alt="Ração para Cães">
            <h3 class="title-racao">Magnus Cat Premium Gatos Filhotes Carne e Frango</h3>
            <div class="buttons-prod">
                <button class="details-btn"><a href="detalhe-felinos.php?id='cat1'">Ver Detalhes</a></button>
                <div class="add-to-cart-container">
                    <button class="add-to-cart-btn">+</button>
                    <span class="tooltip-text">Adicionar ao carrinho</span>
                </div>
            </div>
        </div>

        <div class="produto prod2">
            <img class="img-racao" src="img/racao-felino-0.webp" alt="Ração para Cães">
            <h3 class="title-racao">Magnus Cat Premium Gatos Adultos Carne</h3>
            <div class="buttons-prod">
                <button class="details-btn"><a href="detalhe-felinos.php?id='cat2'">Ver Detalhes</a></button>
                <div class="add-to-cart-container">
                    <button class="add-to-cart-btn">+</button>
                    <span class="tooltip-text">Adicionar ao carrinho</span>
                </div>
            </div>
        </div>

        <div class="produto prod3">
            <img class="img-racao" src="img/racao-felino-3.webp" alt="Ração para Cães">
            <h3 class="title-racao">Magnus Cat Premium Gatos Adultos Salmão</h3>
            <div class="buttons-prod">
                <button class="details-btn"><a href="detalhe-felinos.php?id='cat3'">Ver Detalhes</a></button>
                <div class="add-to-cart-container">
                    <button class="add-to-cart-btn">+</button>
                    <span class="tooltip-text">Adicionar ao carrinho</span>
                </div>
            </div>
        </div>

        <div class="produto prod4">
            <img class="img-racao" src="img/racao-felino-4.webp" alt="Ração para Cães">
            <h3 class="title-racao">Magnus Cat Premium Gatos Adultos Castrados Carne</h3>
            <div class="buttons-prod">
                <button class="details-btn"><a href="detalhe-felinos.php?id='cat4'">Ver Detalhes</a></button>
                <div class="add-to-cart-container">
                    <button class="add-to-cart-btn">+</button>
                    <span class="tooltip-text">Adicionar ao carrinho</span>
                </div>
            </div>
        </div>
        
        <div class="produto prod5">
            <img class="img-racao" src="img/sache-felino-1.webp" alt="Ração para Cães">
            <h3 class="title-racao">Magnus Sachê Gatos Filhotes Sabor Carne ao Molho</h3>
            <div class="buttons-prod">
                <button class="details-btn"><a href="detalhe-felinos.php?id='cat5'">Ver Detalhes</a></button>
                <div class="add-to-cart-container">
                    <button class="add-to-cart-btn">+</button>
                    <span class="tooltip-text">Adicionar ao carrinho</span>
                </div>
            </div>
        </div>

        <div class="produto prod6">
            <img class="img-racao" src="img/sache-felino-2.webp" alt="Ração para Cães">
            <h3 class="title-racao">Magnus Sache Gatos Adultos Carne ao Molho</h3>
            <div class="buttons-prod">
                <button class="details-btn"><a href="detalhe-felinos.php?id='cat6'">Ver Detalhes</a></button>
                <div class="add-to-cart-container">
                    <button class="add-to-cart-btn">+</button>
                    <span class="tooltip-text">Adicionar ao carrinho</span>
                </div>
            </div>
        </div>

        <div class="produto prod7">
            <img class="img-racao" src="img/sache-felino-3.webp" alt="Ração para Cães">
            <h3 class="title-racao">Magnus Sachê Gatos Adultos Sabor Salmão ao Molho</h3>
            <div class="buttons-prod">
                <button class="details-btn"><a href="detalhe-felinos.php?id='cat7'">Ver Detalhes</a></button>
                <div class="add-to-cart-container">
                    <button class="add-to-cart-btn">+</button>
                    <span class="tooltip-text">Adicionar ao carrinho</span>
                </div>
            </div>
        </div>

        <div class="produto prod8">
            <img class="img-racao" src="img/sache-felino-4.webp" alt="Ração para Cães">
            <h3 class="title-racao">Magnus Sachê Gatos Castrados Sabor Feango ao Molho</h3>
            <div class="buttons-prod">
                <button class="details-btn"><a href="detalhe-felinos.php?id='cat8'">Ver Detalhes</a></button>
                <div class="add-to-cart-container">
                    <button class="add-to-cart-btn">+</button>
                    <span class="tooltip-text">Adicionar ao carrinho</span>
                </div>
            </div>
        </div>

    </section>

    <?php include 'footer.php'; ?>
</body>
</html>