<?php

use App\Core\BaseControllers;
use App\Auth;

class Usuarios extends BaseControllers{

    protected $ModelUsuariosDao;
    protected $ModelUsuarios;

    public function __construct(){
        
        $this->modelUsuariosDao = $this->model('UsuariosDao');
        $this->modelUsuarios = $this->model('Usuario');
    }

    public function index(){

        return $this->viewDash('usuarios/PesquisaUsuarios');
    }

    public function new(){

        return $this->viewDash('usuarios/CadastrarUsuarios');
    }

    public function create(){

        $usuarios = $this->model('usuario');
        $usuariosDao = $this->model('usuariosDao');

        $usuarios->setNomeCompleto($_POST['nomeUser']);
        $usuarios->setLogin($_POST['loginUser']);
        $usuarios->setSenha($_POST['senhaUser']);
        $usuarios->setAtivo($_POST['statusUser']);

        $salvarUsuario = $usuariosDao->cadastrarUsuario($usuarios);

        //Após cadastrar os dados do usuário, é salvo as permissões
        
        echo $salvarUsuario;
    }

    public function testeId(){

        $usuariosDao = $this->model('usuariosDao');

        $nomeUser = 'roberta44';

        $idUser = $usuariosDao->getIdUsuario($nomeUser);

        echo $idUser;
    }

    public function login(){

        $mensagem = array();

        if(isset($_POST['userLogin']) && isset($_POST['userSenha'])):

			$mensagem[] = Auth::login($_POST['userLogin'], $_POST['userSenha']);

			$this->view('login', $dados = ['mensagem' => $mensagem]);

		endif;

        // $this->view('home/index');
    }

    public function listaTodosUsuarios(){

        $listaUsuarios = $this->modelUsuariosDao->getTodosUsers();

        echo json_encode($listaUsuarios);
    }
}