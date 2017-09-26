<?php
namespace Manager;
/**
 * Created by PhpStorm.
 * User: Gun
 * Date: 23/09/2017
 * Time: 13:58
 */
class BalanceManager implements \MyInterface\crud
{
    protected $pdo;

    public function __construct(){
        $dbManager = new DbManager();
        $this->pdo = $dbManager->getConnection();
    }

    public function insert($balance)
    {
        $query='insert into balance (enr, cust_r, devise, amout, date) VALUES (:enr, :cust_r, :devise, :amout, :date)';
        $stmt =$this->prepare($query);
        $stmt->bindParam(':enr',$balance->getEnr(),\PDO::PARAM_INT);
        $stmt->bindParam(':cust_r',$balance->getCust_r(),\PDO::PARAM_STR);
        $stmt->bindParam(':devise',$balance->getDevise(),\PDO::PARAM_STR);
        $stmt->bindParam(':amount',$balance->getAmout(),\PDO::PARAM_STR);
        $stmt->bindParam(':date',$balance->getDate(),\PDO::PARAM_STR);
        $stmt->execute ();

        $balance->setenr($this->pdo->lastInsertId());
    }

    public function selectAll()
    {
        // TODO: Implement selectAll() method.
    }

    public function selectOneById($id)
    {
        // TODO: Implement selectOneById() method.
    }

    public function update($obj)
    {
        // TODO: Implement update() method.
    }
}