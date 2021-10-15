$(document).ready(function (){

    $("#btnLogin").click(function (){
        var form = new FormData($("#formLogin")[0]);
        $.ajax({
            url: 'backend/login.php',
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