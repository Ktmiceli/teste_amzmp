$(document).ready(function (){

    $("#btn_excluir").click(function (){
        var form = new FormData($("#formEditaCliente")[0]);
        $.ajax({
            url: 'backend/drop.php',
            type: 'post',
            dataType: 'json',
            data: form,
            cache: false,
            processData: false,
            contentType: false, 
            timeout: 8000,
            success: function(resultado1){
                $("#lista_clientes").load("frontend/clientes.php");
               // $("#divResposta").html(resultado1);
            }
        });
    });
});