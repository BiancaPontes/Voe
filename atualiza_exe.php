<?php
$servername = "localhost:3306"; 
$username = "root";        
$password = "";           
$dbname = "atividade_somativa"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if (isset($_POST['nome'], $_POST['cpf'], $_POST['email'], $_POST['idade'], $_POST['parentesco'])) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $parentesco = $_POST['parentesco'];

    $sql = "UPDATE clientes SET nome = ?, email = ?, idade = ?, parentesco = ? WHERE cpf = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssiss", $nome, $email, $idade, $parentesco, $cpf); 

    if ($stmt->execute()) {
        echo "<script>alert('Registro alterado com sucesso!'); window.location.href='dependentes.php';</script>";
    } else {
        echo "<script>alert('Erro executando UPDATE: " . $stmt->error . "'); window.location.href='dependentes.php';</script>";
    }

    $stmt->close();
} else {
    echo "Dados não fornecidos!";
}

$conn->close();
?>
