<?php
    /*Arquivo responsável pela conexão com a base de dados mysql
     *
     * Desenvolvido por Kaique Tadeu Miceli
     */

     $local = "localhost";
     $bd_user = "root";
     $bd_pass = "";
     $bd_database = "teste_amzmp";

     //=> Tabelas de dados 
     $bd_t_cliente = 'bd_clientes';
     $bd_t_adm = 'bd_adm';

    //=> Variável de armazenamento da conexão do banco de dados
     $con = mysqli_connect($local, $bd_user, $bd_pass, $bd_database);
?>