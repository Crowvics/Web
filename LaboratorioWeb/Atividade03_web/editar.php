<?php

include_once ('conexao.php');

$id = $_GET ['codigo'];
$sql_consulta = mysqli_query ($conectar, "SELECT *FROM tbclientes WHERE id_cli = '$id' ");
$dados = mysqli_fetch_array ($sql_consulta);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type = "text/css">
        *{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        body{
            background-color: #D3D3D3;
            background-size: cover;
        }
        div{
            background-color: rgba(0, 0, 0, 0.9); 
              position: absolute;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
              padding: 80px;
              border-radius: none;
              color: white;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        input[type=submit]{
            background-color: #836FFF;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }
        input[type=submit]:hover{
            background-color:#6959CD;
        }
        a:link{
            color:white;
        }
        a:visited {
            color: white;
        }
        a:hover {
        color: red;
        }
    </style>
    <title>Cadastro</title>
</head>
<body>
        <div>
       <center> <h1>Atualizar</h1> <center>
        <h3><a href = "site.php">Página Inicial</a></h3>
        <form method = "POST" action = "atualizar.php">
            ID <br>
            <input type = "text" name = "txt_id" value = '<?= $dados[0] ?>'> <br>
            Nome <br>
            <input type = "text" name = "txt_nome" value = '<?= $dados[1] ?>'> <br> 
            Email <br>
            <input type = "email" name = "txt_email" value = '<?= $dados[2] ?>'> <br>
            Endereço <br>
            <input type = "text" name = "txt_end" value = '<?= $dados[3] ?>'> <br>
            Cidade <br>
            <input type = "text" name = "txt_cidade" value = '<?= $dados[4] ?>'> <br>
            Estado <br>
            <input type = "text" name = "txt_uf" value = '<?= $dados[5] ?>'> <br> <br>
            
            <input type = "submit" value = "Editar" > <br> 
        </form>
        </div>
      
</body>
</html>