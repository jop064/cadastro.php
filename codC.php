<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('conexao.php');


// Recebe os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// Cria a SQL de inserção no banco
$sql = "INSERT INTO aluno(nome, email, senha) VALUES ('$nome', '$email', '$senha')";

// Executa a SQL
if (mysqli_query($conexao, $sql)) {
    echo "";
} else {
    echo " " . mysqli_error($conexao);
}
}
// Fecha a conexão




?>
