$(document).ready(function (){

    $("#btn_submit").click(function (){
        var form = new FormData($("#formcad")[0]);
        $.ajax({
            url: 'backend/cadastro_verify.php',
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