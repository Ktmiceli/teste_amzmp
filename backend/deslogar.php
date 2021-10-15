<?php
   /*
    *Desloga do admin
    */

    session_start();
    $_SESSION['adm_openSession'] = null;
    header("Location: ../index.php?logoff")
?>