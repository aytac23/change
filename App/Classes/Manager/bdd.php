<?php
namespace Manager;
/**
 * Created by PhpStorm.
 * User: Gun
 * Date: 20/09/2017
 * Time: 20:51
 */
class DbManager {

    //constante de classe
    const DB_HOST = "localhost";
    const DB_NAME = "change";
    const DB_USER = "root";
    const DB_PASSWORD = "";

    protected static $instance = null;
    protected $conn;

    private function __construct(){
        $dsn = "mysql:dbname=".self::DB_NAME.";host=".self::DB_HOST ;
        $this->conn = new \PDO( $dsn, self::DB_USER, self::DB_PASSWORD);
        $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new DbManager();
        }
        return self::$instance;
    }

    public function getConnection(){
        return $this->conn;
    }

}