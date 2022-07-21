<?php
require_once ('conexao.php');
$usuario = $_POST ['txt_usuario'];
$senha = $_POST ['txt_senha'];
$sql_cadastro = mysqli_query ($conectar, "INSERT INTO tblogin (user_login, pass_login) values ('$usuario', '$senha')");

if ($sql_cadastro == true){
    echo "<script>
    alert ('Usuário cadastrado com sucesso');
    window.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
    alert ('Falha no cadastro');
    window.location.href = 'cadastrarUsuario.html';
    </script>";
}
?>