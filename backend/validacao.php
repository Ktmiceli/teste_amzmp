<?php
   /*
    *Verifica se o usuario está logado
    */

    session_start();
    if(!isset($_SESSION['adm_openSession']) and
    (!isset($_SESSION['adm_openSession']) != null)) header("Location: index.php?token=sessao");
?>