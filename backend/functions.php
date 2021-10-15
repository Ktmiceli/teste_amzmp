<?php

function verificaForm($con,$tab,$email,$nome,$telefone,$cpf,$cidade,$endereco){
    $token_verifica = array();

    //=> Verifica se o email é válido e não já utilizado
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) array_push($token_verifica,'<p>E-mail inválido.</p>');

    $query_verifica_email = mysqli_query($con,"select _email from $tab where _email = '$email' LIMIT 1");
    if($query_verifica_email -> num_rows > 0) array_push($token_verifica,'<p>E-mail já utilizado.</p>');

    //=> Verifica se o cliente digitou um nome válido (mínimo 5 caracteres)
    if(count_chars($nome) < 5) array_push($token_verifica,'<p>Nome muito curto.</p>');

    //=> Verifica se o cpf não está sendo utilizado
    $query_verifica_cpf = mysqli_query($con,"select _cpf from $tab where _cpf = '$cpf' LIMIT 1");
    if($query_verifica_cpf -> num_rows > 0) array_push($token_verifica,'<p>CPF já está em uso.</p>');

    //=> Verifica se o telefone é válido
    if(count_chars(($telefone) < 8)) array_push($token_verifica,'<p>Telefone Inválido.</p>');

    if(count($token_verifica) > 0){
        $string_erro = 'Erros no formulário:';
        $e = 0;
        while($e <= count($token_verifica)){
            $string_erro = $string_erro.$token_verifica[$e];
            $e++;
        }
        echo "deu false";
        return json_encode("<div id='cad_fail'>Erro</div>");
    }else{ echo "deu true"; return true; }
}

function verificaLogin($con,$bd_adm,$login,$pass){
    $queryADM = mysqli_query($con,"select * from $bd_adm where 
        _login ='$login' and _pass = '$pass' limit 1");
        if(($queryADM -> num_rows) > 0) return true; 
        else return false; 
}



?>