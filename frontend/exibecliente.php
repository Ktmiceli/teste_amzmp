<script src='frontend/js/jquery-3.6.0.min.js'></script>
<script src='frontend/js/scripts.js'></script>
<?php
    include("../backend/bdcon.php");
    include("../backend/cliente.php");

    $ID = $_GET['cliid'];
    $cliente = new cliente;
    $cliente->setId($ID);
    $cliente->setInfos($con,$bd_t_cliente);
?>

<div id='exibicao_cliente'>
    <div class='cliente_token'><b>ID: <?php echo $cliente->getInfo('id');?>
    </b> - <b>CPF: <?php echo $cliente->getInfo('cpf');?></b><div>
    <div class='cliente_content'><?php echo $cliente->getInfo('nome');?></div>
    <div class='cliente_label'>Nome</div>
    <div class='cliente_content'><?php echo $cliente->getInfo('email');?></div>
    <div class='cliente_label'>Email</div>
    <div class='cliente_content'><?php echo $cliente->getInfo('telefone');?></div>
    <div class='cliente_label'>Telefone</div>
    <div class='cliente_content'><?php echo $cliente->getInfo('cidade');?></div>
    <div class='cliente_label'>Cidade</div>
    <div class='cliente_content'><?php echo $cliente->getInfo('endereco');?></div>
    <div class='cliente_label'>Endereço</div>
    <div class='cliente_botoes'>
    <?php echo "<input type='button' id='btn_editar' value='Editar' onclick='loadEdit($ID)' />";
    echo "<input type='button' id='btn_fechar' value='Fechar' onclick='fechaCli($ID)'/>"; ?>
</div>
</div>