<?php

 class TenistaDao{
    var $_SERVER = "";
    var $_USER = "";
    var $_PWD = "";
    var $_DB = "";
    var $table = "tenistas";

    private function connect(){
        return mysqli_connect($_SERVER, $_USER, $_PWD, $_DB);
    }

    private function close($conexao){
        return mysqli_close($conexao);
    }

    function insert($nome, $endereco, $idade){
        $conexao = $this->connect();
        $resultado = mysqli_query($conexao, "INSERT INTO " . $table . "(nome, endereco, idade) VALUES (". $nome .", ". $endereco . ", " . $idade . ");");
        close($conexao);

        return $resultado;
    }


    function read(){
        $conexao = $this->connect();
        $resultado = mysqli_query($conexao, "SELECT * FROM " . $table . ";");
        close($conexao);
        
        $tenistas;
        for ($i=0; $i< msqli_num_rows(); $i++){
            $tenistas[$i] = mysqli_fetch_object($resultado);
        }
        return $tenistas;
    }
}

?>