<?php 

use App\Core\Conexao;

class FornecedorDao extends Conexao{

    public function cadastrarFornecedor(Fornecedor $f){

        $query = "INSERT INTO fornecedores (razaoSocial, cnpj, celular, email, endereco, bairro, uf, cidade, ativo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $f->getRazaoSocial());
        $stmt->bindValue(2, $f->getCNPJ());
        $stmt->bindValue(3, $f->getCelular());
        $stmt->bindValue(4, $f->getEmail());
        $stmt->bindValue(5, $f->getEndereco());
        $stmt->bindValue(6, $f->getBairro());
        $stmt->bindValue(7, $f->getUf());
        $stmt->bindValue(8, $f->getCidade());
        $stmt->bindValue(9, $f->getAtivo());

        if($stmt->execute()){

            return "Sucesso";

        }else{

            $erro = implode(",", $stmt->errorInfo());

            return $erro;
        }
    }

    public function listarFornecedores(){

        $query = "SELECT * FROM fornecedores";
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->execute();

        if($stmt->rowCount() > 0){

            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $resultado;
        }
    }

    //Busca dados do fornecedor para atualizar
    public function buscarFornecedor($id){

        $query = "SELECT * FROM fornecedores where idFornecedor = ?";
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        if($stmt->rowCount() > 0){

            $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);

            return $resultado;
        }

    }

    public function atualizarFornecedor(Fornecedor $c, $id){

        $query = "UPDATE fornecedores SET RazaoSocial = ?, celular = ?, email = ?, endereco = ?, bairro = ?, uf = ?, cidade = ?, Cnpj = ? WHERE idFornecedor = ?";
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $c->getRazaoSocial());
        $stmt->bindValue(2, $c->getCelular());
        $stmt->bindValue(3, $c->getEmail());
        $stmt->bindValue(4, $c->getEndereco());
        $stmt->bindValue(5, $c->getBairro());
        $stmt->bindValue(6, $c->getUf());
        $stmt->bindValue(7, $c->getCidade());
        $stmt->bindValue(8, $c->getCNPJ());
        $stmt->bindValue(9, $id);

        if($stmt->execute()){

            return "Sucesso";

        }else{

            $erro = implode(",", $stmt->errorInfo());

            return $erro;
        }
    }

    public function deletarFornecedor($id){

        $query = "DELETE FROM fornecedores where idFornecedor = ?";
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $id);

        if($stmt->execute()){

            return "Sucesso";

        }else{

            return "Erro";
        }
    }
}