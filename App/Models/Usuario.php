<?php

use App\Core\Conexao;

class Usuario extends Conexao{

    private $nomeCompleto, $login, $senha, $ativo;

    public function getNomeCompleto(){
        
        return $this->nomeCompleto;
    }

    public function setNomeCompleto($nome){

        $this->nomeCompleto = $nome;
    }

    public function getLogin(){

        return $this->login;
    }

    public function setLogin($login){

        $this->login = $login;

    }

    public function getSenha(){

        return $this->senha;

    }

    public function setSenha($senha){

        $this->senha = $senha;
    }

    public function getAtivo(){

        return $this->ativo;

    }

    public function setAtivo($ativo){

        $this->ativo = $ativo;
    }
}