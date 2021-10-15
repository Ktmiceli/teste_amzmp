<?php
   /*
    *Classe Cliente
    */

class cliente{
    private $id;
    private $email;
    private $cpf;
    private $nome;
    private $telefone;
    private $cidade;
    private $endereco;
    
    public function setInfos($con,$tb_cliente){
        $query_car = mysqli_query($con,"select * from $tb_cliente where _id = '$this->id' limit 1");
        while($fetch_car = mysqli_fetch_array($query_car,MYSQLI_ASSOC)){
            $this->nome = $fetch_car['_nome'];
            $this->email = $fetch_car['_email'];
            $this->cpf = $fetch_car['_cpf'];
            $this->telefone = $fetch_car['_telefone'];
            $this->cidade = $fetch_car['_cidade'];
            $this->endereco = $fetch_car['_endereco'];
    }
}

    public function setId($id){
        $this->id = $id;
    }

    public function getInfo($str){
        return $this->$str;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setInfo($str,$valor){
        $this->$str = $valor;
    }

    public function deletec($con,$tb_cliente){
        $query_cliente = mysqli_query($con,"delete from $tb_cliente 
        where _id = '$this->id' limit 1");
        mysqli_close($con);
    }

    public function updateCliente($con,$tb_cliente){
        $query_cliente = mysqli_query($con,"update $tb_cliente set _nome = '$this->nome',
        _email = '$this->email', _telefone = '$this->telefone', _cidade = '$this->cidade',
     _endereco = '_$this->endereco' where _id = '$this->id' limit 1");
        mysqli_close($con);
    }

}

?>