<script src='frontend/js/jquery-3.6.0.min.js'></script>
<script src='frontend/js/scripts.js'></script>
<script src='frontend/js/form3.js'></script>
<script src='frontend/js/form4.js'></script>
<?php
    include("../backend/bdcon.php");
    include("../backend/cliente.php");

    $ID = $_GET['cliid'];
    $cliente = new cliente;
    $cliente->setId($ID);
    $cliente->setInfos($con,$bd_t_cliente);
?>

<div id='exibicao_cliente'>
    <form id='formEditaCliente'>
    <?php echo "<input type='text' name='txt_ocult_id' id='txtOcult' value='$ID' />" ?>
    <div class='cliente_token'><b>ID: <?php echo $cliente->getInfo('id');?>
    </b> - <b>CPF: <?php echo $cliente->getInfo('cpf');?></b><div>
    <div class='cliente_content'>
    <input type='text' class='edtTxt' name='edit_nome' value='<?php echo $cliente->getInfo('nome');?>' /></div>
    <div class='cliente_label'>Nome</div>
    <div class='cliente_content'>
    <input type='text' class='edtTxt' name='edit_email' value='<?php echo $cliente->getInfo('email');?>' /></div>
    <div class='cliente_label'>Email</div>
    <div class='cliente_content'>
    <input type='text' class='edtTxt' name='edit_telefone' value='<?php echo $cliente->getInfo('telefone');?>' /></div>
    <div class='cliente_label'>Telefone</div>
    <div class='cliente_content'>
    <input type='text' class='edtTxt' name='edit_cidade' value='<?php echo $cliente->getInfo('cidade');?>' /></div>
    <div class='cliente_label'>Cidade</div>
    <div class='cliente_content'>
    <input type='text' class='edtTxt' name='edit_endereco' value='<?php echo $cliente->getInfo('endereco');?>' /></div>
    <div class='cliente_label'>Endereço</div>

    <div class='cliente_botoes'><input type='button' id='btn_salvar' value='Salvar' />
    <input type='button' id='btn_excluir' value='Excluir' />
    <?php echo "<input type='button' id='btn_fechar' value='Fechar' onclick='fechaCli($ID)'/>"; ?>
    </div>
    <div id='divResposta'></div>
</form>
</div>
</div>