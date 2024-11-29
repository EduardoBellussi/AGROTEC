<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$isUserLoggedIn = isset($_SESSION['email']) && $_SESSION['senha'];
?>

<header>
    <nav>
        <div class="intro">
            <a href="index.php"><h1>Agropecuária Leme</h1></a>
        </div>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li class="submenu-produtos">
                <a href="javascript:void(0)">Produtos</a>
                <div class="submenu">
                    <a href="caninos.php">Caninos</a>
                    <a href="felinos.php">Felinos</a>
                </div>
            </li>
            <li><a href="sobrenos.php">Sobre Nós</a></li>
            <!-- Carrinho -->
            <li>
                <a href="javascript:void(0)" class="cart-icon">
                    <i class="ph ph-shopping-cart-simple"></i>
                    <span class="cart-count" style="display: none;">0</span>
                </a>
            </li>
            <li class="submenu-login">
                <a href="javascript:void(0)"><i class="ph ph-user"></i><i class="fa-solid fa-angle-down"></i></a>
                <div class="submenu2">
                    <?php if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) : ?>

                        <a href="login.php"><i class="ph ph-sign-in"></i> Login</a>
                    <?php else: ?>
                        <!-- usuario logado -->
                        <a href="perfil.php"><i class="ph ph-pen"></i> Editar Perfil</a>
                        <a href="seguranca.php"><i class="ph ph-lock"></i> Segurança</a>
                        <hr />
                        <a href="logout.php"><i class="ph ph-sign-out"></i> Sair</a>
                    <?php endif; ?>                       
                </div>
            </li>
        </ul>
    </nav>

    <div id="cart-sidebar" class="sidebar">
        <span class="closebtn" onclick="closeCart()">&times;</span>
        <h2>Carrinho</h2>
        <table class="table-cart">
            <thead>
                <tr>
                    <td class="table-cart-quant"><h3> Quantidade</h3></td>
                    <td class="table-cart-itens"><h3>Itens</h3></td>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
        <div class="cart-empty-message"><p>Seu Carrinho está vazio</p></div>
        <button class="finalizarCompra" id="btnFinalizarCompra"
        <?php echo $isUserLoggedIn ? '' : 'disabled'; ?>
        title="<?php echo $isUserLoggedIn ? '' : 'Você precisa estar logado para finalizar a compra.'; ?>"
        >
            Finalizar Compra
        </button>
    </div>

    
        <div class="main">
            <div class="esquerdo">
                <h1>Melhores <span>Rações</span> <br> para o seu Animal</h1>
                <p>Bem-vindo ao seu destino de confiança para rações de qualidade. Nós nos comprometemos em fornecer as melhores opções nutricionais para seus animais. Garantimos a saúde e o vigor do seu melhor amigo, sempre com produtos de excelência e atendimento personalizado.</p>
            </div>

            <div class="direita">
                <img src="img/maisteste.png">
            </div>
        </div>

</header>
<!-- Mobile -->
    <div class="header-container">
        <div class="menu-toggle" id="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="logo">
            <a href="index.php">Agropecuária Leme</a>
         </div>
        <a href="javascript:void(0)" class="cart-icon">
            <i class="ph ph-shopping-cart-simple"></i>
            <span class="cart-count" style="display: none;">0</span>
        </a>
    </div>
    
    <nav id="mobile-menu" class="mobile-menu">
        <div class="menu-header">
            <span class="close-menu" id="close-menu">&times;</span>
        </div>
        <ul>
            <li><a href="index.php"><i class="ph ph-house"></i> Home</a></li>
            <li class="submenu-produtos">
                <a href="javascript:void(0)"><i class="ph ph-package"></i> Produtos</a>
                <div class="submenu-mobile">
                    <a href="caninos.php"><i class="ph ph-dog"></i> Caninos</a>
                    <a href="felinos.php"><i class="ph ph-cat"></i> Felinos</a>
                </div>
            </li>
            <li><a href="sobrenos.php"><i class="ph ph-users-three"></i> Sobre Nós</a></li>
            <li class="submenu-login">
                    <a href="javascript:void(0)"><i class="ph ph-user"></i>Perfil</a>
                    <div class="submenu-mobile">
                        <?php if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) : ?>

                                <a href="login.php"><i class="ph ph-sign-in"></i> Login</a>
                        <?php else: ?>
                            <!-- usuario logado -->
                                <a href="perfil.php"><i class="ph ph-pen"></i> Editar Perfil</a>
                                <a href="seguranca.php"><i class="ph ph-lock"></i> Segurança</a>
                                <hr />
                                <a href="logout.php"><i class="ph ph-sign-out"></i> Sair</a>
                        <?php endif; ?>                       
                    </div>
                </li>
        </ul>
    </nav>
    <div class="main-mobile">
        <div class="esquerdo">
            <h1>Melhores <span>Rações</span> <br> para o seu Animal</h1>
            <p>Bem-vindo ao seu destino de confiança para rações de qualidade.</p> 
            <p> Nós nos comprometemos em fornecer as melhores opções nutricionais para seus animais. </p>
            <p>Garantimos a saúde e o vigor do seu melhor amigo, sempre com produtos de excelência e atendimento personalizado.</p>
        </div>
    </div>