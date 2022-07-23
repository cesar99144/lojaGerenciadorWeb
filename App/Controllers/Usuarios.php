<?php

use App\Core\BaseControllers;

class Usuarios extends BaseControllers{

    public function index(){

        return $this->viewDash('usuarios/PesquisaUsuarios');
    }

    public function new(){

        return $this->viewDash('usuarios/CadastrarUsuarios');
    }
}