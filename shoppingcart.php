<?php
session_start();
if (!isset($_SESSION['Email'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="scripts/style.css">
    <script src="scripts/shoppingcart.js"></script>
    <!-- <style>
        /* Store Section */

        .shoppingcart-empty p {
            font-size: 25px;
            margin: 50px auto;
            width: 80%;
            display: block;
            height: 40px;
            padding: 70px 0;
            margin-bottom: 50px;
            border-radius: 10px;
        }

        .btn-voltar-carrinho {
            background-color: white;
            text-align: center;
            text-decoration: none;
            color: black;
            font-size: 18px;
            padding: 10px;
            border-radius: 10px;
            display: block;
            width: 15%;
            margin: auto;
        }

        .div-produtos {
            text-align: center;
            font-size: 25px;
            margin-top: px;
            width: 80%;
            display: block;
            margin: auto;
            height: 80px;
            padding: 70px 0;
            margin-bottom: 50px;
            border-radius: 10px;
        }

        .div-left {
            display: flex;
            float: left;
            width: 50%;
        }

        .div-right {
            display: flex;
            float: right;
            width: 50%;
        }

        .btn-excluir {
            color:black;
            border: none;
            padding: 5px;
            font-size: 15px;
            border-radius: 10px;
            cursor: pointer;
        }

        @media(max-width:700px) {
            .div-left {
                width: 100%;
                float: none;
            }

            .div-right {
                width: 100%;
                float: none;
            }
        }

        .div-produtos {
            display: flex;
            border: 1px solid #ccc;
            background: #B0D1D9;
            margin: 50px auto;
            padding: 10px;
        }

        /* Estilos para a parte esquerda da div (imagem) */
        .div-left {
            flex: 1;
        }

        /* Estilos para a parte direita da div (informações e botão de excluir) */
        .div-right {
            flex: 1;
            padding-left: 10px;
        }

        /* Estilos para o nome do produto */
        .nome-do-produto {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
            padding: 20px;
        }

        /* Estilos para o preço do produto */
        .preço-do-produto {
            font-size: 16px;
            color: black;
            padding: 20px;
        }

        /* Estilos para o botão de excluir */
        .btn-excluir {
            background-color: grey;
            color: #fff;
            padding: 1px;
            border: none;
            cursor: pointer;
        }
    </style> -->
        <style>
           
        </style>
    
</head>

<body>
    <!-- Navbar :) -->
    <nav class="navbar-bg">
        <input type="checkbox" id="menu-toggle">
        <div class="navbar">
            <section class="navbar-logo">
                <span><a href="">LOGO</a></span>
            </section>
            <section class="navbar-pages">
                <label for="menu-toggle" class="menu-icon">&#9776;</label>
                <ul>
                    <li class="navbar-item"><a href="index.html">Início</a></li>
                    <li class="navbar-item"><a href="products-list.html">Produtos</a></li>
                    <li class="navbar-item"><a href="about-us.html">Sobre</a></li>
                    <li class="navbar-item"><a href="scripts/forbiddenScripts/profileListener.php"><img
                                src="img/icon-person.jpg" alt="error!"></a></li>
                    <li class="navbar-item"><a href="shoppingcart.php"><img src="img/cart-icon.png" alt="error!">(0)</a>
                    </li>
                </ul>
            </section>
        </div>

        <div class="menu-overlay" id="menu-overlay"></div>
        <div class="menu">
            <ul>
                <li><a href="#" onclick="teste()">Início</a></li>
                <li><a href="products-list.html">Produtos</a></li>
                <li><a href="about-us.html">Sobre</a></li>
                <li><a href="scripts/forbiddenScripts/profileListener.php"><img src="img/icon-person.jpg"
                            alt="error!">Perfil</a></li>
                <li><a href="shoppingcart.php"><img src="img/cart-icon.png" alt="error!">(0)</a></li>
            </ul>
        </div>
    </nav>
    <!-- Separator bar :) -->
    <section class="separator-bar">
        <span>Frete grátis a partir de R$100</span>
    </section>
    <!-- Shopping Section -->
    <section class="shopping-section">
        <div id="carrinho"></div>
        <div id="carrinho-vazio" style="display: none;">Carrinho vazio</div>
        </div>
    </section>
    <a href="pagamento.html" class="btn-continuar-compra">Continuar compra</a>
    <!-- Footer -->
    <footer>
        <div class="footer-grid">
            <div class="footer-item">
                <span><a href="#">LOGO</a></span>
            </div>
            <hr>
            <div class="footer-item">
                <span>CNPJ: 00.000.000/0000-00</span><br>
                <span>TELEFONE: (00) 0000-0000</span><br>
                <span><img src="img/instagram-icon.png" alt="error!"><img src="img/twitter-icon.png"
                        alt="error!"></span>
            </div>
        </div>
    </footer>
</body>

</html>