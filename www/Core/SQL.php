<?php

namespace App\Core;

class SQL
{
    public $pdo;

    public function __construct(){
        try{
            $this->pdo = new \PDO("pgsql:host=database;dbname=esgi","esgi","EsgiPwd");
        }catch(\Exception $e){
            die("Erreur SQL ".$e->getMessage());
        }
    }

}