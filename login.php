<?php

session_start();


if (empty($_POST) || empty($_POST["usuario"]) || empty($_POST["senha"])) {
    echo "<script>location.href='index.php';</script>";
    exit; 
}


include('config.php');


$usuario = mysqli_real_escape_string($conn, $_POST["usuario"]);
$senha = mysqli_real_escape_string($conn, $_POST["senha"]);


$sql = "SELECT * FROM usuarios WHERE usuario = '{$usuario}' AND senha = '{$senha}'";
$res = $conn->query($sql) or die($conn->error);


$qtd = $res->num_rows;

if ($qtd > 0) {
    
    $row = $res->fetch_assoc();
    
    // Armazena os dados na sessão
    $_SESSION["usuario"] = $row["usuario"];
    $_SESSION["nome"] = $row["nome"];
    $_SESSION["tipo"] = $row["tipo"];
    
    echo "<script>location.href='dashboard.php';</script>";
} else {
    // Exibe mensagem de erro e redireciona para a página inicial
    echo "<script>alert('Usuário e/ou senha incorretos');</script>";
    echo "<script>location.href='index.php';</script>";
}

?>
