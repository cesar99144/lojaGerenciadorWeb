<?php 

use App\Core\BaseControllers;
use App\Auth;

class Clientes extends BaseControllers{

    protected $auth;

    public function __construct(){
        
        $this->auth = new Auth();
    }

    public function index(){

        return $this->viewDash('clientes/listagemClientes');
    }

    public function new(){

        //Analisa a permissão do usuário para cadastro antes de abrir a tela
        $permissao = $this->auth->analisarPermissoes('cadastrar_clientes');

        if($permissao){

            return $this->viewDash('clientes/cadastrarCliente');

        }else{

            $paginaAtual = "clientes";

            return $this->viewDash('erros/semPermissao', $data = ['paginaAtual' => $paginaAtual]);
        }
    }

    public function create(){

        $clientes = $this->model('cliente');
        $clientesDao = $this->model('clientesDao');

        $clientes->setNome($_POST['nomeCliente']);
        $clientes->setCelular($_POST['celularCliente']);
        $clientes->setEmail($_POST['emailCliente']);
        $clientes->setEndereco($_POST['enderecoCliente']);
        $clientes->setBairro($_POST['bairroCliente']);
        $clientes->setUf($_POST['ufCliente']);
        $clientes->setCidade($_POST['cidadeCliente']);
        $clientes->setAtivo($_POST['ativoCliente']);

        $cadastrarCliente = $clientesDao->cadastrarCliente($clientes);

        echo $cadastrarCliente;

        
    }

    public function edit($id){

        $clientesDao = $this->model('clientesDao');
        $dadosCliente = $clientesDao->buscarCliente($id);

        return $this->viewDash('clientes/editarCliente', $data = ['dadosCliente' => $dadosCliente]);
    }

    public function update($id){

        $clientes = $this->model('cliente');
        $clientesDao = $this->model('clientesDao');

        $clientes->setNome($_POST['nomeCliente']);
        $clientes->setCelular($_POST['celularCliente']);
        $clientes->setEmail($_POST['emailCliente']);
        $clientes->setEndereco($_POST['enderecoCliente']);
        $clientes->setBairro($_POST['bairroCliente']);
        $clientes->setUf($_POST['ufCliente']);
        $clientes->setCidade($_POST['cidadeCliente']);

        $atualizarCliente = $clientesDao->atualizarCliente($clientes, $id);

        echo $atualizarCliente;

        
    }

    public function delete($id){

        //Analisa a permissão do usuário
        $permissao = $this->auth->analisarPermissoes('excluir_clientes');

        if($permissao){

            $clientesDao = $this->model('clientesDao');
            $deletarCliente = $clientesDao->deletarCliente($id);
    
            echo $deletarCliente;

        }else{

            // $paginaAtual = "clientes";

            // return $this->viewDash('erros/semPermissao', $data = ['paginaAtual' => $paginaAtual]);

            echo "SemPermissao";
        }
    }

    public function listarClientes(){

        $clientes = $this->model('clientesDao');
        $listaClientes = $clientes->listarClientes();

        echo json_encode($listaClientes);
    }
}