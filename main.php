<?php
include('backend/validacao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Backend - KAIQUE (AMZMP)</title>
</head>
<script src='frontend/js/jquery-3.6.0.min.js'></script>
<script src='frontend/js/scripts.js'></script>
<script src='frontend/js/form2.js'></script>
<link href="frontend/css/main.css" rel="stylesheet" type="text/css" />
<body>
    <div id='top'>
        <ul>
            <li><img src='frontend/src/imagem_amzmp.jpg' /></li>
            <li class='libtn'onclick="app('listaClientes')">Clientes Cadastrados</li>
            <li class='libtn' onclick="app('Cadastro')">Cadastrar Novo Cliente</li>
            <li class='libtn' onclick="logOff()">Sair</li>
        </ul>
    </div>
    <div id='app'></div>
</body>
</html>