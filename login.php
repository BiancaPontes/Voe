<?php
$servername = "localhost:3306"; 
$username = "root";        
$password = "";           
$dbname = "atividade_somativa"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];

    $cpf = $conn->real_escape_string($cpf);
    $email = $conn->real_escape_string($email);
    $senha = $conn->real_escape_string($senha);
    $sql = "SELECT * FROM login WHERE cpf = '$cpf' AND email = '$email' AND senha = MD5('$senha')";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['usuario_logado'] = $email;
        header("Location: Ofertas.php");
        exit;
    } else {
        echo "<script>alert('Email, senha ou CPF incorretos'); window.location.href = 'login.php';</script>";
        exit;
    }
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos\style.css">
        <link rel="icon" href="image/logo.ico" type="image/x-icon">

        <title>Formulário</title>
    </head>

    <body>  
        <header> 
            <div class="menu"> 
                <ul class="itens-esquerda"> 
                    <li class="item-menu-01"> <a href="index.html"> Inicio </a></li>
                    <li class="item-menu-02"> <a href="about.html"> Sobre Nós </a></li>
                    <li class="item-menu-03"> <a href="emconstrucao.html"> Segurança </a></li>
                    <li class="item-menu-04"> <a href="emconstrucao.html"> Aplicativo </a></li>
                </ul>
                <ul class="itens-direita"> 
                    <li class="cta-1"> <a href="login.php"> Área do Cliente </a></li>
                    <li><button id="botao-fale-conosco" class="botao-fale-conosco">Fale Conosco</button></li>
                </ul>
            </div>
        </header>
    <main> 
        <div class="formulario-login">
            <div class="login">
                <h4>Que bom te ver aqui, <br> vamos viajar?</h4>
                <form class="login-campos" id="login-campos" method="POST" action="login.php">
                    <label for="email-login">Email</label><br>
                    <input type="email" id="email-login" name="email" required><br>
                
                    <label for="senha-login">Senha</label><br>
                    <input type="password" id="senha-login" name="senha" required><br>
                
                    <label for="cpf-login">CPF</label><br>
                    <input type="text" id="cpf-login" name="cpf" maxlength="14" required><br>
                
                    <button type="submit" id="botao">Entrar</button>
                </form>
                <a href="#" class="esqueci-senha">Esqueci minha senha!</a>
                <a href="adiciona-novo-usuario.html" class="novo-usuario"> Criar uma Conta </a>
            </div>
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
   
    </body>
    
</html>

