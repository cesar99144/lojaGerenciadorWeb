<?php

use App\Core\BaseControllers;

class Home extends BaseControllers{

    public function index(){

        return $this->view('login');
    }

}