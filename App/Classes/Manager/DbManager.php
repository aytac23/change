<?php

namespace Manager;
/**
 * Created by PhpStorm.
 * User: Gun
 * Date: 24/09/2017
 * Time: 17:13
 */
class DbManager {
//attributs
    protected $pdo;

    public function __construct() {
        $dsn = "mysql:host=localhost;dbname=change";
        $options = array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);
        $this->pdo = new \PDO($dsn,"root","", $options);
        //obligation utilisation \PDO car pas dans le même namespace
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getConnection() {
        return $this->pdo;
    }

}