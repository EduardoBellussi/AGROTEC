<!-- https://adimax.com.br/magnus/para-caes/ -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="css/style-caninos.css">
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
        
        <div class="prod-racao produto prod1">
            <img class="img-racao" src="img/racao-canino-1.jpg" alt="Ração para Cães">
            <h3 class="title-racao">Magnus Premium Especial Supreme Cães Filhotes Sabor Frango e Cereais</h3>
            <div class="buttons-prod">
                <button class="details-btn"><a href="detalhe-caninos.php?id='dog1'">Ver Detalhes</a></button>
                <div class="add-to-cart-container">
                    <button class="add-to-cart-btn">+</button>
                    <span class="tooltip-text">Adicionar ao carrinho</span>
                </div>
            </div>
        </div>

        <div class="prod-racao produto prod2" >
            <img class="img-racao" src="img/racao-canino-2.jpg" alt="Ração para Cães">
            <h3 class="title-racao">Magnus Premium Especial Supreme Cães Adultos Pequeno Porte Sabor Frango e Cereais</h3>
            <div class="buttons-prod">
                <button class="details-btn"><a href="detalhe-caninos.php?id='dog2'">Ver Detalhes</a></button>
                <div class="add-to-cart-container">
                    <button class="add-to-cart-btn">+</button>
                    <span class="tooltip-text">Adicionar ao carrinho</span>
                </div>
            </div>
        </div>

        <div class="prod-racao produto prod3" >
            <img class="img-racao" src="img/racao-canino-3.jpg" alt="Ração para Cães">
            <h3 class="title-racao">Magnus Premium Especial Supreme Cães Adultos Sabor Frango e Cereais</h3>
            <div class="buttons-prod">
                <button class="details-btn"><a href="detalhe-caninos.php?id='dog3'">Ver Detalhes</a></button>
                <div class="add-to-cart-container">
                    <button class="add-to-cart-btn">+</button>
                    <span class="tooltip-text">Adicionar ao carrinho</span>
                </div>
            </div>
        </div>

        <div class="prod-racao produto prod4" >
            <img class="img-racao" src="img/racao-canino-4.jpg" alt="Ração para Cães">
            <h3 class="title-racao">Magnus Super Premium Cães Adultos Sabor Frango e Arroz</h3>
            <div class="buttons-prod">
                <button class="details-btn"><a href="detalhe-caninos.php?id='dog4'">Ver Detalhes</a></button>
                <div class="add-to-cart-container">
                    <button class="add-to-cart-btn">+</button>
                    <span class="tooltip-text">Adicionar ao carrinho</span>
                </div>
            </div>
        </div>

        <div class="prod-racao produto prod5" >
            <img class="img-racao" src="img/racao-canino-5.jpg" alt="Ração para Cães">
            <h3 class="title-racao">Magnus Premium Cães Todo Dia Filhotes Sabor Carne</h3>
            <div class="buttons-prod">
                <button class="details-btn"><a href="detalhe-caninos.php?id='dog5'">Ver Detalhes</a></button>
                <div class="add-to-cart-container">
                    <button class="add-to-cart-btn">+</button>
                    <span class="tooltip-text">Adicionar ao carrinho</span>
                </div>
            </div>
        </div>

        <div class="prod-racao produto prod6" >
            <img class="img-racao" src="img/racao-canino-6.jpg" alt="Ração para Cães">
            <h3 class="title-racao">Magnus Premium Todo Dia Cães Adultos Pequeno Porte Sabor Carne e Frango</h3>
            <div class="buttons-prod">
                <button class="details-btn"><a href="detalhe-caninos.php?id='dog6'">Ver Detalhes</a></button>
                <div class="add-to-cart-container">
                    <button class="add-to-cart-btn">+</button>
                    <span class="tooltip-text">Adicionar ao carrinho</span>
                </div>
            </div>
        </div>

        <div class="prod-racao produto prod7" >
            <img class="img-racao" src="img/racao-canino-7.jpg" alt="Ração para Cães">
            <h3 class="title-racao">Magnus Premium Todo Dia Cães Adultos Sabor Carne</h3>
            <div class="buttons-prod">
                <button class="details-btn"><a href="detalhe-caninos.php?id='dog7'">Ver Detalhes</a></button>
                <div class="add-to-cart-container">
                    <button class="add-to-cart-btn">+</button>
                    <span class="tooltip-text">Adicionar ao carrinho</span>
                </div>
            </div>
        </div>

        <div class="prod-racao produto prod8" >
            <img class="img-racao" src="img/racao-canino-8.jpg" alt="Ração para Cães">
            <h3 class="title-racao">Magnus Premium Cães Adultos Chips</h3>
            <div class="buttons-prod">
                <button class="details-btn"><a href="detalhe-caninos.php?id='dog8'">Ver Detalhes</a></button>
                <div class="add-to-cart-container">
                    <button class="add-to-cart-btn">+</button>
                    <span class="tooltip-text">Adicionar ao carrinho</span>
                </div>
            </div>
        </div>

        <div class="prod-petisco produto prod9" >
            <img class="img-racao" src="img/petisco-canino-5.jpg" alt="Ração para Cães">
            <h3 class="title-racao">Magnus Biscoito Cães Filhotes</h3>
            <div class="buttons-prod">
                <button class="details-btn"><a href="detalhe-caninos.php?id='dog9'">Ver Detalhes</a></button>
                <div class="add-to-cart-container">
                    <button class="add-to-cart-btn">+</button>
                    <span class="tooltip-text">Adicionar ao carrinho</span>
                </div>
            </div>
        </div>

        <div class="prod-petisco produto prod10" >
            <img class="img-racao" src="img/petisco-canino-6.jpg" alt="Ração para Cães">
            <h3 class="title-racao">Magnus Biscoito Cães Adultos Pequeno Porte</h3>
            <div class="buttons-prod">
                <button class="details-btn"><a href="detalhe-caninos.php?id='dog10'">Ver Detalhes</a></button>
                <div class="add-to-cart-container">
                    <button class="add-to-cart-btn">+</button>
                    <span class="tooltip-text">Adicionar ao carrinho</span>
                </div>
            </div>
        </div>

        <div class="prod-petisco produto prod11" >
            <img class="img-racao" src="img/petisco-canino-7.jpg" alt="Ração para Cães">
            <h3 class="title-racao">Magnus Biscoito Mix Cães Adultos</h3>
            <div class="buttons-prod">
                <button class="details-btn"><a href="detalhe-caninos.php?id='dog11'">Ver Detalhes</a></button>
                <div class="add-to-cart-container">
                    <button class="add-to-cart-btn">+</button>
                    <span class="tooltip-text">Adicionar ao carrinho</span>
                </div>
            </div>
        </div>

        <div class="prod-petisco produto prod12" >
            <img class="img-racao" src="img/petisco-canino-8.jpg" alt="Ração para Cães">
            <h3 class="title-racao">Magnus Biscoito Original Cães Adultos</h3>
            <div class="buttons-prod">
                <button class="details-btn"><a href="detalhe-caninos.php?id='dog12'">Ver Detalhes</a></button>
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