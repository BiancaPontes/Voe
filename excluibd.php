<?php
$servername = "localhost:3306"; 
$username = "root";        
$password = "";           
$dbname = "atividade_somativa"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $cpf = $_GET['id']; 

    $sql = "SELECT nome, cpf, email, idade, parentesco FROM clientes WHERE cpf = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $cpf); 
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $nome = $row['nome'];
        $email = $row['email'];
        $idade = $row['idade'];
        $parentesco = $row['parentesco'];
    }
} else {
    
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style.css">

    <link rel="icon" href="image/logo.ico" type="image/x-icon">
    <title>Formulário de Cadastro</title>
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
                <li class="cta-1"> <a href="emconstrucao-login.html"> Minhas Passagens </a></li>
                <li><button id="botao-fale-conosco" class="botao-fale-conosco">Sair</button></li>
            </ul>
        </div>
    </header>

    <main>
        <div class="formulario-login">
            <div class="login">
                <h4>Que bom te ver aqui, <br> vamos viajar?</h4>
                <form class="login-campos" id="login-campos" method="POST" action="excluir_exe.php">
                    <label for="nome">Nome</label><br>
                    <input type="text" id="nomelogin" name="nome" value="<?php echo isset($nome) ? $nome : ''; ?>" required><br>

                    <label for="cpf-login">CPF</label><br>
                    <input type="text" id="cpf-login" name="cpf" value="<?php echo isset($cpf) ? $cpf : ''; ?>" maxlength="14" required><br>

                    <label for="email-login">Email</label><br>
                    <input type="email" id="email-login" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required><br>

                    <label for="idade">Idade</label><br>
                    <input type="number" id="idade-login" name="idade" value="<?php echo isset($idade) ? $idade : ''; ?>" required><br>

                    <label for="parentesco">Parentesco</label><br>
                    <input type="text" id="parentesco-login" name="parentesco" value="<?php echo isset($parentesco) ? $parentesco : ''; ?>" required><br>

                    <button type="submit" id="botao">Cadastrar</button>
                </form>

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
    <script src="script/script.js"></script>
</body>

</html>

