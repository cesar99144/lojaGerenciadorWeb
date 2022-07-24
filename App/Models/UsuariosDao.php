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
}