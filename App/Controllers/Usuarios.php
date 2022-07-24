<?php

use App\Core\BaseControllers;
use App\Auth;

class Usuarios extends BaseControllers{

    protected $ModelUsuarios;

    public function __construct(){
        
        $this->modelUsuarios = $this->model('UsuariosDao');
    }

    public function index(){

        return $this->viewDash('usuarios/PesquisaUsuarios');
    }

    public function new(){

        return $this->viewDash('usuarios/CadastrarUsuarios');
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

        $listaUsuarios = $this->modelUsuarios->getTodosUsers();

        echo json_encode($listaUsuarios);
    }
}