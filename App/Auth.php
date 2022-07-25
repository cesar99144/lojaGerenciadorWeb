<?php

namespace App;

use App\Core\Conexao;

class Auth{

	public static function login($loginUser, $senha){

        $query = "SELECT * FROM usuarios WHERE LOGIN = ?";
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $loginUser);
        $stmt->execute();

        if($stmt->rowCount() > 0):
            
            $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);

            if($senha == $resultado['SENHA']):

                $_SESSION['logado'] = true;
                $_SESSION['userId'] = $resultado['USUARIO_ID'];
                $_SESSION['userLogin'] = $resultado['LOGIN'];
                $_SESSION['userNome'] = $resultado['NOME_COMPLETO'];
                
                header('Location: /usuarios');

            else:

                return "Dados inválidos";

            endif;

        else:
            return "Dados não encontrados";
        endif;
    }

    public static function logout(){

        session_destroy();
        header('Location: /');
    }

    //Impede que as páginas do software sejam acessadas sem o usuário está logado
    public static function checkLogin(){

        if(!isset($_SESSION['logado'])):

           header('Location: /');
           die;

        endif;

    }

    public function analisarPermissoes($chave){

        $query = "SELECT * FROM autorizacoes WHERE USUARIO_ID = ? and CHAVE_AUTORIZACAO = ?";
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $_SESSION['userId']);
        $stmt->bindValue(2, $chave);
        $stmt->execute();

        if($stmt->rowCount() > 0){

            return true;

        }else{

            return false;
        }
        
    }

}