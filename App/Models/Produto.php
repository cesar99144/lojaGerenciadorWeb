<?php 

use App\Core\Conexao;

class Produto extends Conexao{

    protected $nome, $estoque, $preco;

    public function getNome(){

        return $this->nome;

    }

    public function setNome($n){

        $this->nome = $n;

    }

    public function getEstoque(){

        return $this->estoque;

    }

    public function setEstoque($n){

        $this->estoque = $n;

    }

    public function getPreco(){

        return $this->preco;

    }

    public function setPreco($n){

        $this->preco = $n;

    }

}