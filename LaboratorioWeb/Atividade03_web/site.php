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

        #menu-h{
            list-style: none;
            padding: 0;
            background-color: 	#363636;
        }

        #menu-h ul li{
            display: inline-block;
        }

        #menu-h ul li a{
            color: #FFF;
            padding: 20px;
            display: inline-block;
            text-decoration: none;
            transition: background .6s;
        }

        #menu-h ul li a:hover{
            background-color: #A9A9A9;  
        }
        
        
        div{
            font-size: 21px;
        }


    </style>
    <title>Página Principal</title>
    <?php

    include_once ('conexao.php');

    ?>
</head>
<body>
    <nav id = "menu-h">
    <ul>
    <li><a href = "visualizar.php">Visualizar Clientes</a></li>
    <li><a href = "excluir.php">Excluir Clientes</a></li>
    <li><a href = "cadastrarCliente.html">Cadastrar Clientes</a></li>
    <li><a href = "atualizarCliente.php">Editar Clientes</a></li>
    <li><a href = "pesquisar.php">Pesquisar Clientes</a></li>
    <li id =><a href = "index.php">Logout</a></li>
    </ul>
    </nav>
    <div>
    <b>Bem vindo ao banco de dados da empresa! Aqui pode-se visualizar todos os clientes da locadora, cadastrar novos clientes,
    excluir clientes, editar suas informações e fazer pesquisas avançadas caso desejar. <b> <br> <br>
    </div>
    <center> <img src = "images.jpg" border = 3> </center>
    <br><br>
   
</body>
</html>