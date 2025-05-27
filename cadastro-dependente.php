<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atividade_somativa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

function validarCPF($cpf)
{
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
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $parentesco = $_POST['parentesco'];

    $nome = $conn->real_escape_string($nome);
    $cpf = $conn->real_escape_string($cpf);
    $email = $conn->real_escape_string($email);
    $idade = $conn->real_escape_string($idade);
    $parentesco = $conn->real_escape_string($parentesco);

    if (!validarCPF($cpf)) {
        echo "<script>alert('CPF inválido!'); window.location.href = 'adiciona-novo-dependente.html';</script>";
        exit();
    }

    $sql_check_cliente = "SELECT * FROM clientes WHERE CPF = '$cpf'";
    $result_cliente = $conn->query($sql_check_cliente);

    if ($result_cliente->num_rows == 0) {
        $sql_insert_cliente = "INSERT INTO clientes (nome, CPF, email, idade, parentesco) 
                               VALUES ('$nome', '$cpf', '$email', '$idade', '$parentesco')";

        if ($conn->query($sql_insert_cliente) === TRUE) {
            echo "<script>alert('Dependente cadastrado com sucesso!'); window.location.href = 'dependentes.php';</script>";
        } else {
            echo "<script>alert('Erro ao adicionar o dependente na tabela de clientes.'); window.location.href = 'dependentes.php';</script>";
        }
    } else {
        echo "<script>alert('CPF já cadastrado!'); window.location.href = 'dependentes.php';</script>";
    }
}

$conn->close();
?>
