<?php

namespace App\Core;

class Conexao{

    private static $instance;

    public static function getConn(){

        //Verifica se já existe uma instância da conexão antes de retornar
        if(!isset(self::$instance)):

            self::$instance = new \PDO('mysql:host=localhost;dbname=teste;charset=utf8','root', '12345');

        endif;

        return self::$instance;
    }
}