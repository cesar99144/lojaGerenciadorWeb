<?php

use App\Core\Conexao;

class PermissoesDao extends Conexao{

    public function cadastrarPermissao($idUser, $chaveAutorizacao){

        $query = "INSERT INTO autorizacoes (USUARIO_ID, CHAVE_AUTORIZACAO) VALUES (?, ?)";
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $idUser);
        $stmt->bindValue(2, $chaveAutorizacao);

        if($stmt->execute()){

            return "Sucesso";

        }else{

            return "Erro";
        }

    }
}