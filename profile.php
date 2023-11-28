<?php
session_start();
if (!isset($_SESSION['Email'])) {
    header("Location: login.html");
    exit();
}

$host = "localhost";
$username = "root";
$password = "0000";
$database = "clients";

$conn = mysqli_connect($host, $username, $password, $database);

$email = $_SESSION['Email'];
// Consulta SQL para buscar as informações do usuário
$sql = "SELECT nome, username, mail, cpf FROM usuarios WHERE mail = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($nome, $username, $email, $cpf);

// Buscar os resultados da consulta
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="scripts/style.css">
    <title>LOGO</title>
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
                    <li class="navbar-item"><a href="scripts/forbiddenScripts/profileListener.php"  class="navbar-item-actived"><img src="img/icon-person.jpg" alt="error!"></a></li>
                    <li class="navbar-item"><a href="shoppingcart.php"><img src="img/cart-icon.png" alt="error!">(0)</a></li>
                </ul>
            </section>
        </div>

        <div class="menu-overlay" id="menu-overlay"></div>
        <div class="menu">
            <ul>
                <li><a href="index.html">Início</a></li>
                <li><a href="products-list.html">Produtos</a></li>
                <li><a href="about-us.html">Sobre</a></li>
                <li><a href="scripts/forbiddenScripts/profileListener.php"  class="navbar-item-actived"><img src="img/icon-person.jpg" alt="error!">Perfil</a></li>
                <li><a href="shoppingcart.php"><img src="img/cart-icon.png" alt="error!">(0)</a></li>
            </ul>
        </div>
    </nav>
    <!-- Profile section -->
    <section>
        <div class="profile-section">
            <div class="profile-section-grid">
                <h1>Meus Dados</h1>
                <h2>Dados da conta</h2>
                <div class="profile-section-div">
                    <div class="profile-left">Usuário</div>
                    <span><?php echo $username; ?></span>
                </div>
                <div class="profile-section-div-2">
                    <div class="profile-left">Email</div>
                    <span><?php echo $email; ?></span>
                </div>
            </div>
            <br>
        </div>
        <a href="about-us.html#contact-section"><p class="profile-section-p">Precisa de ajuda com os dados da conta?</p></a>
        <div class="profile-section">
            <div class="profile-section-grid">
                <h1 style="margin-bottom: 10px;">Dados Pessoais</h1>
                <div class="profile-section-div">
                    <div class="profile-left">Nome Completo</div>
                    <span><?php echo $nome; ?></span>
                </div>
<!--                 <div class="profile-section-div-3">
                    
                </div> -->
                <div class="profile-section-div-4">
                    <div class="profile-left">Documento</div>
                    <span><?php echo $cpf; ?></span>
                </div>
            </div>
            <br>
        </div>
        <a href="about-us.html#contact-section"><p class="profile-section-p">Precisa de ajuda com os dados pessoais?</p></a><br>
        <a href="scripts/forbiddenScripts/logout.php" class="profile-section-btn">Sair</a>
    </section>
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