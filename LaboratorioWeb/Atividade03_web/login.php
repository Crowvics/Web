<?php
include_once ('conexao.php');

$usuario = $_POST ['txt_usuario'];
$senha = $_POST ['txt_senha'];

$sql_logar = mysqli_query ($conectar, " SELECT *FROM tblogin WHERE user_login = '$usuario' and pass_login = '$senha' ");

if(mysqli_num_rows($sql_logar)!=0){
    header ('location:site.php');
} else {
    echo "<script>
    alert ('Usuário não registrado');
    windows.location.href = 'index.php';
    </script>";
}




?>