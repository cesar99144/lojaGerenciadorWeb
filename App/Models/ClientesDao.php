<?php 

use App\Core\Conexao;

class ClientesDao extends Conexao{

    public function cadastrarCliente(Cliente $c){

        $query = "INSERT INTO clientes (nome, celular, email, endereco, bairro, uf, cidade, ativo) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $c->getNome());
        $stmt->bindValue(2, $c->getCelular());
        $stmt->bindValue(3, $c->getEmail());
        $stmt->bindValue(4, $c->getEndereco());
        $stmt->bindValue(5, $c->getBairro());
        $stmt->bindValue(6, $c->getUf());
        $stmt->bindValue(7, $c->getCidade());
        $stmt->bindValue(8, $c->getAtivo());

        if($stmt->execute()){

            return "Sucesso";

        }else{

            $erro = implode(",", $stmt->errorInfo());

            return $erro;
        }
    }

    public function listarClientes(){

        $query = "SELECT * FROM clientes";
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->execute();

        if($stmt->rowCount() > 0){

            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $resultado;
        }
    }

    //Busca dados de cliente para atualizar
    public function buscarCliente($id){

        $query = "SELECT * FROM clientes where idCliente = ?";
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        if($stmt->rowCount() > 0){

            $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);

            return $resultado;
        }

    }

    public function atualizarCliente(Cliente $c, $id){

        $query = "UPDATE clientes SET nome = ?, celular = ?, email = ?, endereco = ?, bairro = ?, uf = ?, cidade = ? WHERE idCliente = ?";
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $c->getNome());
        $stmt->bindValue(2, $c->getCelular());
        $stmt->bindValue(3, $c->getEmail());
        $stmt->bindValue(4, $c->getEndereco());
        $stmt->bindValue(5, $c->getBairro());
        $stmt->bindValue(6, $c->getUf());
        $stmt->bindValue(7, $c->getCidade());
        $stmt->bindValue(8, $id);

        if($stmt->execute()){

            return "Sucesso";

        }else{

            $erro = implode(",", $stmt->errorInfo());

            return $erro;
        }
    }

    public function deletarCliente($id){

        $query = "DELETE FROM clientes where idCliente = ?";
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $id);

        if($stmt->execute()){

            return "Sucesso";

        }else{

            return "Erro";
        }
    }
}