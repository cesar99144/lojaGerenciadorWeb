<?php 

use App\Core\Conexao;

class Cliente extends Conexao{

    protected $nome, $celular, $email, $endereco, $bairro, $uf, $cidade, $ativo;

    public function getNome(){

        return $this->nome;

    }

    public function setNome($n){

        $this->nome = $n;

    }

    public function getCelular(){

        return $this->celular;

    }

    public function setCelular($c){

        $this->celular = $c;

    }

    public function getEmail(){

        return $this->email;

    }

    public function setEmail($e){

        $this->email = $e;

    }

    public function getEndereco(){

        return $this->endereco;

    }

    public function setEndereco($e){

        $this->endereco = $e;

    }
    
    public function getBairro(){

        return $this->bairro;

    }

    public function setBairro($b){

        $this->bairro = $b;

    }

    public function getUf(){

        return $this->uf;

    }

    public function setUf($u){

        $this->uf = $u;

    }

    public function getCidade(){

        return $this->cidade;

    }

    public function setCidade($c){

        $this->cidade = $c;

    }

    public function getAtivo(){

        return $this->ativo;

    }

    public function setAtivo($a){

        $this->ativo = $a;

    }

    
}