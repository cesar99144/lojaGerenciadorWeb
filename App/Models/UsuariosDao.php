<?php

use App\Core\Conexao;

class UsuariosDao extends Conexao{

    public function getTodosUsers(){

        $query = "SELECT * FROM usuarios";
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->execute();

        if($stmt->rowCount() > 0){

            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

			return $resultado;
        }
    }

    public function cadastrarUsuario(Usuario $u){

        $query = "INSERT INTO usuarios (LOGIN, SENHA, ATIVO, NOME_COMPLETO) VALUES (?, ?, ?, ?)";
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $u->getLogin());
		$stmt->bindValue(2, $u->getSenha());
		$stmt->bindValue(3, $u->getAtivo());
		$stmt->bindValue(4, $u->getNomeCompleto());

        if($stmt->execute()){

            return "Sucesso";

        }else{

            return "Erro";
        }
    }

    public function getIdUsuario($nomeUser){

        $query = "SELECT * FROM usuarios where LOGIN = ?";
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $nomeUser);
        $stmt->execute();

        if($stmt->rowCount() > 0){

            $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);

			return $resultado['USUARIO_ID'];
        }
    }
}