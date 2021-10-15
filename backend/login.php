<?php
   /*
    *Arquivo responsável pelo login o adm
    */
    session_start();
    include("bdcon.php");
    include("functions.php");

    $login_digitado = $_POST['text_login'];
    $pass_digitado = md5($_POST['text_pass']);
    $categoria = $_POST['text_slc'];

    if(verificaLogin($con,$bd_t_adm,$login_digitado,$pass_digitado)){
        $_SESSION['adm_openSession'] = $login_digitado;
        $_SESSION['credenciais_erro'] = false;
        header("Location: ../main.php");
    }else{
        $_SESSION['credenciais_erro'] = 'Erro com as credenciais!';
        header("Location: ../index.php");
    }

?>