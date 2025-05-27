<?php
session_start();
if (!isset($_SESSION['usuario_logado'])) {
    header("Location: login.php");
    exit();
} 
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos\style.css">
    <link rel="icon" href="image/logo.ico" type="image/x-icon">

    <title>Ofertas</title>
</head>

<body>
    <header> 
        <div class="menu"> 
            <ul class="itens-esquerda"> 
                <li class="item-menu-01"> <a href="Ofertas.php"> Passagens </a></li>
                <li class="item-menu-02"> <a href="dependentes.php"> Dependentes </a></li>
                <li class="item-menu-03"> <a href="emconstrucao-login.html"> Minhas viagens </a></li>
            </ul>
            <ul class="itens-direita"> 
                <li class="cta-1"> <a href="emconstrucao-login.html"> Minhas Passagens  </a></li>
                <li><a href="sair.php" class="botao-sair">Sair</a></li>

            </ul>
        </div>
    </header>
    <main> 
        <div class="banner-inicial">
            <h1>Confira as ofertas <br> dísponiveis para <br> destinos incriveis</h1>
        </div>

        <div class="viagens-paris">
            <div class="viagens-paris-texto">
                <h3>Pacote para Paris 2025</h3><br>
                <ul>
                    <li>Viagem para março de 2025</li>
                    <li>Pacote para até 5 pessoas </li>
                    <li> Parcele em até 12x sem juros</li>
                </ul>
                <button id="botao-app" class="botao-app">QUERO ESSA PASSAGEM</button>
            </div>
            <div class="viagens-paris-img">
                <img src="image/paris.png" alt="" class="img-promocao-esquerda">
            </div>
        </div>
       
        <div class="viagens-disney">
            <div>  
                <img src="image/disney.png" alt="" class="aplicativo-img">
            </div>
            <div class="viagens-disney-2">
                <h3>Pacote para Disney Natal 2024</h3><br>
                <ul>
                    <li>Viagem para dezembro de 2024</li>
                    <li>Pacote para até 8 pessoas </li>
                    <li> Parcele em até 12x sem juros</li>
                </ul>
                <button id="botao-app" class="botao-app">QUERO ESSA PASSAGEM</button>
            </div>
        </div>

        <div class="viagens-paris">
            <div class="viagens-paris-texto">
                <h3>Pacote para Londres Março - 2025</h3><br>
                <ul>
                    <li>Viagem para março de 2025</li>
                    <li>Pacote para até 3 pessoas </li>
                    <li> Parcele em até 12x sem juros</li>
                </ul>
                <button id="botao-app" class="botao-app">QUERO ESSA PASSAGEM</button>
            </div>
            <div class="viagens-paris-img">
                <img src="image/londres.png" alt="" class="img-promocao-esquerda">
            </div>
        </div>

    </main>
    <footer class="footer">
        <div class="mapa-do-site">
            <ul class="mapa-do-site-lista"> 
                <li class="mapa-do-site-item"> <a href="#">Banefícios </a></li>
                <li class="mapa-do-site-item"> <a href="#">Segurança </a></li>
                <li class="mapa-do-site-item"> <a href="#">Aplicativo </a></li>
                <li class="mapa-do-site-item"> <a href="#">Área do clientes </a></li>
            </ul>
        </div>
        <div class="contato">
            <ul class="contato-lista"> 
                <li class="contato-item"> +00 00 0000 0000 </li>
                <li class="contato-item"> +00 00 0000 0000 </li>
                <li class="contato-item"> <a href="#"> Na mídia</a></li>
                <li class="contato-item"> Endereço aqui </li>
            </ul>
        </div>
        <div class="SAC">
                <ul class="SAC-lista"> 
                    <li class="SAC-item"> +00 000 0000 0000 </li>
                    <li class="SAC-item"> <a href="#"> Chat Ajuda</a></li>
                </ul>
        </div>
        <div class="Seguranca-e-Dados">
            <ul class="Seguranca-e-Dados-lista"> 
                <li class="Seguranca-e-Dados-item"> <a href="#"> Lei Geral de Proteção de Dados (LGPD)</a> </li>
                <li class="Seguranca-e-Dados-item"> <a href="#"> Politica de privacidade</a></li>
            </ul>

        </div>
        <div class="Logo"> <img src="image/logo.png" alt="" class="logo"> </div>

    </footer>

    <script src="script\script.js" ></script>
    <script src="script\menu.js" ></script>
    

</body>

</html>