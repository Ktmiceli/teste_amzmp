function selecCliente(cliid){
    $("#lista_clientes").load("frontend/exibecliente.php?cliid="+cliid);
}

function loadEdit(cliid){
    $("#lista_clientes").load("frontend/editacliente.php?cliid="+cliid);
}

function fechaCli(){
    $("#lista_clientes").load("frontend/clientes.php");
}

function logOff(){
    window.location.href = 'backend/deslogar.php';
}

function app(str){
    if(str == 'listaClientes'){
        $("#app").load("frontend/clientes.php");
    }
    else if(str == 'Cadastro'){
        $("#app").load("frontend/formulario_cadastro.php");
    }
}