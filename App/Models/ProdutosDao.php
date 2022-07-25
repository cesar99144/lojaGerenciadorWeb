<?php

use App\Core\Conexao;

class ProdutosDao extends Conexao{

    public function cadastrarProduto(Produto $p){

        $query = "INSERT INTO produtos (nome, estoque, preco) VALUES (?, ?, ?)";
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getEstoque());
        $stmt->bindValue(3, $p->getPreco());

        if($stmt->execute()){

            return "Sucesso";

        }else{

            $erro = implode(",", $stmt->errorInfo());

            return $erro;
        }
    }

    public function listarProdutos(){

        $query = "SELECT * FROM produtos";
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->execute();

        if($stmt->rowCount() > 0){

            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $resultado;
        }
    }

    public function atualizarProduto(Produto $p, $id){

        $query = "UPDATE produtos SET nome = ?, estoque = ?, preco = ? WHERE idProduto = ?";
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getEstoque());
        $stmt->bindValue(3, $p->getPreco());
        $stmt->bindValue(4, $id);

        if($stmt->execute()){

            return "Sucesso";

        }else{

            $erro = implode(",", $stmt->errorInfo());

            return $erro;
        }
    }

    //Busca dados de produtos para atualizar
    public function buscarProduto($id){

        $query = "SELECT * FROM produtos where idProduto = ?";
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        if($stmt->rowCount() > 0){

            $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);

            return $resultado;
        }

    }
}