<?php

include('conexao.php');
$output = '';
if (isset ($_POST ['search'])){
    $searchq = $_POST ['search'];
    $query = mysqli_query ($conectar, "SELECT * FROM tbclientes WHERE id_cli LIKE '%$searchq%' OR nome_cli LIKE '%$searchq%' OR email_cli LIKE '%$searchq%' 
    OR end_cli LIKE '%$searchq%' OR cidade_cli LIKE '%$searchq%' OR uf_cli LIKE '%$searchq%'");
    $count = mysqli_num_rows ($query);
    if ($count == 0){
        $output = 'Cliente não encontrado';
    } else {
        while ($row = mysqli_fetch_array ($query)){
            $id = $row ['id_cli'];
            $nome = $row ['nome_cli'];
            $email = $row ['email_cli'];
            $end = $row ['end_cli'];
            $cidade = $row ['cidade_cli'];
            $estado = $row ['uf_cli'];

            $output .= '<div> <b>ID: </b>'.$id.' | <b>Nome: </b>'.$nome.' | <b>Email: </b>'.$email.' | 
            <b>Endereço: </b>'.$end.' | <b>Cidade: </b>'.$cidade.' | <b>Estado: </b>'.$estado.' | </div>';
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Busca</title>
    <style type = "text/css">
        *{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin: 0 auto;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #D3D3D3;
            background-size: cover;
        }
        table, td, th{
            border: 1px solid #000;
        }

        table{
            width: 1200px;
            table-layout: fixed;
            border-collapse: collapse;
        }

        td, th{
            height: 50px;
            vertical-align: middle;
            text-align: center;
        }
        th{
            background-color: #A9A9A9;
            font-size: 20px;
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
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }
        input[type=submit]:hover{
            background-color:#6959CD;
        }
        

    </style>
</head>
<body>
<div>
    <center>
        <br>
        <b><h1>Busca de Clientes</h1></b>
        <br>
    </center>
        <h3><a href = "site.php">Página Inicial</a></h3> <br>
        <hr>
    <center>
    <form action = "" method = "POST">
        <input type = "text" name = "search" placeholder = "Procurar cliente" size = 70>
        <input type = "submit" value = ">>"> <br>
        <hr>
        <br>

    </form>
    <?php print("$output");?>

    </center>
    </div>
</body>
</html>