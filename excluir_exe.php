<?php
$servername = "localhost:3306"; 
$username = "root";        
$password = "";           
$dbname = "atividade_somativa"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $cpf = $_GET['id']; 

    $sqlDeleteLogin = "DELETE FROM login WHERE cpf = ?";
    $stmtLogin = $conn->prepare($sqlDeleteLogin);
    $stmtLogin->bind_param("s", $cpf);
    $stmtLogin->execute();
    $stmtLogin->close();

    $sqlDeleteClientes = "DELETE FROM clientes WHERE cpf = ?";
    $stmtClientes = $conn->prepare($sqlDeleteClientes);
    $stmtClientes->bind_param("s", $cpf);

    if ($stmtClientes->execute()) {
        echo "<script>
                alert('Registro excluído com sucesso!');
                window.location.href = 'dependentes.php'; 
              </script>";
    } else {
        echo "<script>
                alert('Erro ao excluir o registro: " . $stmtClientes->error . "');
                window.location.href = 'dependentes.php';
              </script>";
    }

    $stmtClientes->close();
} else {
    echo "<script>
            alert('CPF não fornecido!');
            window.location.href = 'dependentes.php';
          </script>";
}

$conn->close();
?>
