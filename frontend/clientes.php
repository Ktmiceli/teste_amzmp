<script src='frontend/js/jquery-3.6.0.min.js'></script>
<script src='frontend/js/scripts.js'></script>
<link href="frontend/css/index.css" rel="stylesheet" type="text/css" />
<?php

include("../backend/cliente.php"); //=> Carrega a classe cliente
include("../backend/bdcon.php"); //=> Carrega arquivo de banco de dados

$query_clientes = mysqli_query($con,"select * from $bd_t_cliente");

?>
<div id='lista_clientes'>
<?php
while($fetch_clientes = mysqli_fetch_array($query_clientes,MYSQLI_ASSOC)){
    $cli = new cliente;
    $cli->setId($fetch_clientes['_id']);
    $cli->setInfos($con,$bd_t_cliente);
    $idref = $cli->getInfo('id');
    echo "<div class='cli_item' id='divcli$idref' onclick='selecCliente($idref)'><p>
    <b>ID </b> ".$cli->getInfo('id')." 
    <b>Nome:</b> ".$cli->getNome()."</p></div>";
}
?>

</div>