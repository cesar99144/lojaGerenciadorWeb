<?php 

use App\Core\BaseControllers;
use App\Auth;

class Fornecedores extends BaseControllers{

    protected $auth;

    public function __construct(){
        
        $this->auth = new Auth();
    } 

    public function index(){

        return $this->viewDash('fornecedores/listagemFornecedores');
    }

    public function new(){

        //Analisa a permissão do usuário para cadastro antes de abrir a tela
        $permissao = $this->auth->analisarPermissoes('cadastrar_fornecedores');

        if($permissao){

            return $this->viewDash('fornecedores/cadastrarFornecedor');

        }else{

            $paginaAtual = "fornecedores";

            return $this->viewDash('erros/semPermissao', $data = ['paginaAtual' => $paginaAtual]);
        }
    }

    public function create(){

        $fornecedor = $this->model('Fornecedor');
        $fornecedorDao = $this->model('FornecedorDao');

        $fornecedor->setRazaoSocial($_POST['nomeCliente']);
        $fornecedor->setCnpj($_POST['cnpjCliente']);
        $fornecedor->setCelular($_POST['celularCliente']);
        $fornecedor->setEmail($_POST['emailCliente']);
        $fornecedor->setEndereco($_POST['enderecoCliente']);
        $fornecedor->setBairro($_POST['bairroCliente']);
        $fornecedor->setUf($_POST['ufCliente']);
        $fornecedor->setCidade($_POST['cidadeCliente']);
        $fornecedor->setAtivo($_POST['ativoCliente']);

        $cadastrarFornecedor = $fornecedorDao->cadastrarFornecedor($fornecedor);

        echo $cadastrarFornecedor;
    }

    public function edit($id){

        $fornecedorDao = $this->model('fornecedorDao');
        $dadosFornecedor = $fornecedorDao->buscarFornecedor($id);

        return $this->viewDash('fornecedores/editarFornecedor', $data = ['dadosFornecedor' => $dadosFornecedor]);
    }

    public function update($id){

        $fornecedor = $this->model('fornecedor');
        $fornecedorDao = $this->model('fornecedorDao');

        $fornecedor->setRazaoSocial($_POST['nomeCliente']);
        $fornecedor->setCelular($_POST['celularCliente']);
        $fornecedor->setCnpj($_POST['cnpjCliente']);
        $fornecedor->setEmail($_POST['emailCliente']);
        $fornecedor->setEndereco($_POST['enderecoCliente']);
        $fornecedor->setBairro($_POST['bairroCliente']);
        $fornecedor->setUf($_POST['ufCliente']);
        $fornecedor->setCidade($_POST['cidadeCliente']);

        $atualizarFornecedor = $fornecedorDao->atualizarFornecedor($fornecedor, $id);

        echo $atualizarFornecedor;

        
    }

    public function delete($id){

        //Analisa a permissão do usuário para cadastro antes de abrir a tela
        $permissao = $this->auth->analisarPermissoes('excluir_fornecedores');

        if($permissao){

            $fornecedorDao = $this->model('fornecedorDao');
            $deletarFornecedor = $fornecedorDao->deletarFornecedor($id);
    
            echo $deletarFornecedor ;

        }else{

            echo "SemPermissao";
        }
    }

    public function listarFornecedores(){

        $fornecedores = $this->model('fornecedorDao');
        $listaFornecedores = $fornecedores->listarFornecedores();

        echo json_encode($listaFornecedores);
    }
}