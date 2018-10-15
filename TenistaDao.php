<?php

 class TenistaDao{
    var $table = "tenistas";


    function insert($nome, $endereco, $idade){
        $conexao = connect();
        $resultado = mysqli_query($conexao, "INSERT INTO " . $this->table . "(nome, endereco, idade) VALUES (". $nome .", ". $endereco . ", " . $idade . ");");
        close($conexao);

        return $resultado;
    }


    function read(){
        $conexao = connect();

        $query = "SELECT t1.nome tenista1, t2.nome tenista2, c.nome campeonato, j.publico, j.pontuacao_tenista_01, j.pontuacao_tenista_02, q.tipo tipo_quadra FROM jogos j
                  JOIN tenistas t1 ON j.tenista_01_id = t1.id
                  JOIN tenistas t2 ON j.tenista_02_id = t2.id
                  JOIN campeonatos c ON j.campeonatos_id = c.id
                  JOIN quadras q ON j.quadras_id = q.id;";

        $resultado = mysqli_query($conexao, $query);
        close($conexao);
        
        $tenistas;
        for ($i=0; $i< msqli_num_rows(); $i++){
            $tenistas[$i] = mysqli_fetch_object($resultado);
        }
        return $tenistas;
    }
}

$dao_tenista = new TenistaDao();

?>