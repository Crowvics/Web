<?php
include_once ('conexao.php');

$id = $_GET ['codigo'];
$sql_eliminar = mysqli_query ($conectar, "DELETE FROM tbclientes WHERE id_cli = '$id' ");

if ($sql_eliminar == true){
    echo "<script>
    alert ('Usuário excluido com sucesso');
    window.location.href = 'excluir.php';
    </script>";
} else {
    echo "<script>
    alert ('Falha na exclusão');
    window.location.href = 'excluir.php';
    </script>";
}
?>