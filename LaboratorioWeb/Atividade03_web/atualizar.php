<?php
require_once ('conexao.php');
$codigo = $_POST ['txt_id'];
$id = $_POST ['txt_id'];
$nome = $_POST ['txt_nome'];
$email = $_POST ['txt_email'];
$end = $_POST ['txt_end'];
$cidade = $_POST ['txt_cidade'];
$estado = $_POST ['txt_uf'];
$sql_atualizar = mysqli_query ($conectar, "UPDATE tbclientes SET id_cli = '$id', nome_cli = '$nome', email_cli = '$email', end_cli = '$end', 
cidade_cli = '$cidade', uf_cli = '$estado'");

if ($sql_atualizar == true){
    echo "<script>
    alert ('Usuário atualizado sucesso');
    window.location.href = 'atualizarCliente.php';
    </script>";
} else {
    echo "<script>
    alert ('Falha na edição');
    window.location.href = 'atualizarCliente.php';
    </script>";
}
?>