<?php
$servername = "localhost"; 
$username = "root";        
$password = "";           
$dbname = "atividade_somativa"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

function validarCPF($cpf) {
    $cpf = preg_replace('/[^0-9]/', '', $cpf);

    if (strlen($cpf) != 11) {
        return false;
    }

    for ($i = 0; $i < 9; $i++) {
        if ($cpf[$i] != $cpf[$i+1]) {
            return true;
        }
    }
    return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
    
    $email = $conn->real_escape_string($email);
    $senha = $conn->real_escape_string($senha);
    $cpf = $conn->real_escape_string($cpf);

    if (!validarCPF($cpf)) {
        echo "<script>alert('CPF inválido!'); window.location.href = 'index.html';</script>";
        exit();
    }

    $sql_check_cliente = "SELECT * FROM clientes WHERE CPF = '$cpf'";
    $result_cliente = $conn->query($sql_check_cliente);

    if ($result_cliente->num_rows == 0) {
        $sql_insert_cliente = "INSERT INTO clientes (CPF) VALUES ('$cpf')";
        if (!$conn->query($sql_insert_cliente)) {
            echo "<script>alert('Erro ao adicionar o CPF'); window.location.href = 'index.html';</script>";
            exit();
        }
    }

    $sql_check_login = "SELECT * FROM login WHERE cpf = '$cpf'";
    $result_login = $conn->query($sql_check_login);

    if ($result_login->num_rows > 0) {
        echo "<script>alert('CPF já cadastrado!'); window.location.href = 'index.html';</script>";
    } else {
        $senha_hash = md5($senha);  

        $sql_insert = "INSERT INTO login (email, senha, cpf) VALUES ('$email', '$senha_hash', '$cpf')";

        if ($conn->query($sql_insert) === TRUE) {
            echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href = 'login.php';</script>";
        } else {
            echo "<script>alert('Erro ao registrar o usuário! Cadastre novamente'); window.location.href = 'adiciona-novo-usuario.html';</script>";
        }
    }
}

$conn->close();
?>
