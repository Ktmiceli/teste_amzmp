<?php
   /*
    *Arquivo responsável pela exclusão de clientes
    */
include("bdcon.php");
include("cliente.php");

$ID = $_POST['txt_ocult_id'];

$cli = new cliente;
$cli->setId($ID);
$cli->deletec($con,$bd_t_cliente);

echo json_encode('True');

?>