<?php
require_once ('conexao.php');
$id = $_POST ['txt_id'];
$nome = $_POST ['txt_nome'];
$email = $_POST ['txt_email'];
$end = $_POST ['txt_end'];
$cidade = $_POST ['txt_cidade'];
$estado = $_POST ['txt_uf'];
$sql_cadastro = mysqli_query ($conectar, "INSERT INTO tbclientes (id_cli, nome_cli, email_cli, end_cli, cidade_cli, uf_cli) values ('$id', '$nome','$email','$end','$cidade','$estado')");

if ($sql_cadastro == true){
    echo "<script>
    alert ('Usuário cadastrado com sucesso');
    window.location.href = 'cadastrarCliente.html';
    </script>";
} else {
    echo "<script>
    alert ('Falha no cadastro');
    window.location.href = 'cadastrarCliente.html';
    </script>";
}
?>