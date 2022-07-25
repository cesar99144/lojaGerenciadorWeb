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

    public function getPermissoesUsuario($idUser){

        $query = "SELECT * FROM autorizacoes WHERE USUARIO_ID = ?";
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $idUser);
        $stmt->execute();

        if($stmt->rowCount() > 0){

            $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);

			return $resultado;
        }
    }
}