<?php

// Exercício não pede cadastro de jogos, por isso só possui o método read() //

 class JogoDao{
    var $table = "jogos";


    function read(){
        $conexao = connect();
        $resultado = mysqli_query($conexao, "SELECT * FROM " . $this->table . ";");
        close($conexao);
        
        $jogos;
        for ($i=0; $i< msqli_num_rows(); $i++){
            $jogos[$i] = mysqli_fetch_object($resultado);
        }
        return $jogos;
    }
}

$dao_jogo = new JogoDao();

?>