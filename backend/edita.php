<?php
   /*
    *Arquivo responsável pela edição do cliente
    */

    include("bdcon.php");
    include("cliente.php");


    $id = $_POST['txt_ocult_id'];
    $nome = $_POST['edit_nome'];
    $email = $_POST['edit_email'];
    $telefone = $_POST['edit_telefone'];
    $cidade = $_POST['edit_cidade'];
    $endereco = $_POST['edit_endereco'];

    
    $cli = new cliente;
    $cli->setId($id);
    $cli->setInfo('nome',$nome);
    $cli->setInfo('email',$email);
    $cli->setInfo('telefone',$telefone);
    $cli->setInfo('cidade',$cidade);
    $cli->setInfo('endereco',$endereco);

    $cli->updateCliente($con,$bd_t_cliente);

    echo json_encode("Cliente editado com sucesso");
?>