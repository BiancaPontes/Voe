
<?php
$servername = "localhost:3306"; 
$username = "root";        
$password = "";           
$dbname = "atividade_somativa"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$sql = "SELECT nome, cpf, email, idade, parentesco FROM clientes";
$result = $conn->query($sql);
?>

<?php
session_start();
if (!isset($_SESSION['usuario_logado'])) {
    header("Location: login.php");
    exit();
} 

?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dependentes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos\style.css">
        <link rel="stylesheet" href="estilos\tabela.css">
        <link rel="icon" href="image/logo.ico" type="image/x-icon">

        <title>Formulário</title>
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
<div class="dependentes">
    <h2>Seus dependentes cadastrados</h2>
    <div class="tabela-dependentes">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Idade</th>
                    <th>Parentesco</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['nome']}</td>
                                <td>{$row['cpf']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['idade']}</td>
                                <td>{$row['parentesco']}</td>
                                <td class='botao-editar'> 
                                    <a href=\"editarbd.php?id={$row['cpf']}\">Editar</a>
                                </td>
                                <td class='botao-editar'> 
                                    <a href=\"excluir_exe.php?id={$row['cpf']}\">Excluir</a>
                                </td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>Nenhum dependente cadastrado</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <button onclick="location.href='adiciona-novo-dependente.html'" id="botao-cadastro-dependente" class="botao-cadastro-dependente">Cadastrar Novo Dependente</button>

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
</body>
</html>

<?php
$conn->close();
?>