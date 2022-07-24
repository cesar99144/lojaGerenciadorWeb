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

                // print_r($resultado);

                $_SESSION['teste'] = 'testando';
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

    public function logout(){

        session_destroy();
        header('Location: /');
    }

    //Impede que algumas páginas do software sejam acessadas sem o usuário está logado
    public static function checkLogin(){

        if(!isset($_SESSION['logado'])):

           header('Location: /');
           die;

        endif;

    }

}