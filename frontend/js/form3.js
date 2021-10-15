$(document).ready(function (){

    $("#btn_salvar").click(function (){
        var form = new FormData($("#formEditaCliente")[0]);
        $.ajax({
            url: 'backend/edita.php',
            type: 'post',
            dataType: 'json',
            data: form,
            cache: false,
            processData: false,
            contentType: false, 
            timeout: 8000,
            success: function(resultado1){
                $("#divResposta").html(resultado1);
                
            }
        });
    });
});