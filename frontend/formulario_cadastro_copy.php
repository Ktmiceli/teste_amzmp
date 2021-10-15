<script src='frontend/js/jquery-3.6.0.min.js'></script>
<script src='frontend/js/scripts.js'></script>
<script src='frontend/js/form2.js'></script>
<div id='formulario_cad'>
    <form name='form_cad' id='formcad2' method='post' action='../backend/cadastro_verify.php'>
        <div id='form_cabecalho'></div>
        <div class='form_content'><input type='text' name='formulario_email' 
        placeholder='E-mail' /></div>
        <div class='form_label'>E-mail</div>
        <div class='form_content'><input type='text' name='formulario_nome' 
        placeholder='Nome Completo' /></div>
        <div class='form_label'>Nome</div>
        <div class='form_content'><input type='text' name='formulario_cpf' 
        placeholder='000.000.000-00' /></div>
        <div class='form_label'>CPF</div>
        <div class='form_content'><input type='text' name='formulario_telefone' 
        placeholder='(xx)xxxx-xxxx' /></div>
        <div class='form_label'>Telefone</div>
        <div class='form_content'><input type='text' name='formulario_cidade' 
        placeholder='Cidade / UF' /></div>
        <div class='form_label'>Sua Cidade</div>
        <div class='form_content'><input type='text' name='formulario_endereco' 
        placeholder='Rua/Av/Km' /></div>
        <div class='form_label'>Digite seu endereço</div>
        
        <div class='form_content'><input type='SUBMIT' id='btn_submit2' value='Cadastrar' />
        <div id='divResposta'></div>

    </form>

</div>