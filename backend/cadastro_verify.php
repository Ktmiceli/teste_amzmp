<?php
   /*
    *Arquivo responsável pelo cadastro de clientes
    */
   
   include('bdcon.php'); //=> Arquivo Base de Dados
    include('functions.php'); //=> Carrega o arquivo functions.php

    //=> Recuperação do formulario
    $cad_email = $_POST['formulario_email'];
    $cad_nome =$_POST['formulario_nome'];
    $cad_telefone = $_POST['formulario_telefone'];
    $cad_cpf = $_POST['formulario_cpf'];
    $cad_cidade = $_POST['formulario_cidade'];
    $cad_endereco = $_POST['formulario_endereco'];

    $query = mysqli_query($con,"insert into $bd_t_cliente (_nome,_email,_cpf,_telefone,
    _cidade,_endereco) values ('$cad_nome','$cad_email','$cad_cpf','$cad_telefone',
    '$cad_cidade','$cad_endereco')");
    echo json_encode("Cadastro realizado com sucesso");
   

?>