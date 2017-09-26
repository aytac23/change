<?php
namespace Manager;
/**
 * Created by PhpStorm.
 * User: Gun
 * Date: 24/09/2017
 * Time: 18:43
 */
class Cust_rManager implements \MyInterface\crud
{
    //attribut
    protected $pdo;

    public function __construct(){
        $dbManager = new DbManager();
        $this->pdo = $dbManager->getConnection();

    }


    public function insert($cust_r)
    {

        $query = "insert into utilisateur (mdp, name, pname, dtb, mail, adress, cp, city, country, type, actif) "
            . "values (:mdp, :name, :pname, :dtb, :mail, :adress, :cp, :city, :country, :type, :actif)";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':mdp', $cust_r->getMdp(), \PDO::PARAM_STR);
        $stmt->bindParam(':name', $cust_r->getName(), \PDO::PARAM_STR);
        $stmt->bindParam(':pname', $cust_r->getPname(), \PDO::PARAM_STR);
        $stmt->bindParam(':dtb', $cust_r->getDtb(), \PDO::PARAM_STR);
        $stmt->bindParam(':mail', $cust_r->getMail(), \PDO::PARAM_STR);
        $stmt->bindParam(':adress', $cust_r->getAdress(), \PDO::PARAM_STR);
        $stmt->bindParam(':cp', $cust_r->getCp(), \PDO::PARAM_STR);
        $stmt->bindParam(':city', $cust_r->getCity(), \PDO::PARAM_STR);
        $stmt->bindParam(':country', $cust_r->getCountry(), \PDO::PARAM_STR);
        $stmt->bindParam(':type', $cust_r->getType(), \PDO::PARAM_STR);
        $stmt->bindParam(':actif', $cust_r->getActif(), \PDO::PARAM_BOOL);
        $stmt->execute();

        $cust_r->setId_cli($this->pdo->lastInsertId());
    }

    public function emailExist ($mail){
        if (!isset($mail) || $mail==""){
            return false;
        }

        $query = "SELECT * FROM cust_r WHERE mail=:mail";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":mail", $mail, \PDO::PARAM_STR);
        $stmt->execute();

        if($stmt->rowCount()>0){
            return true;
        }

        return false;
    }

    public function authentification ($mail, $mdp){

        if (!isset($mail) || $mail=="" || !isset($mdp) || $mdp==""){
            return false;
        }

        $query ="SELECT * FROM cust_r WHERE mail =:mail AND mdp=:mdp";
        $stmt=$this->pdo->prepare($query);
        $stmt->bindParam(":mail", $mail, \PDO::PARAM_STR);
        $stmt->bindParam(":mdp", $mdp, \PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->rowCount() !=1){
            return false;
        }else{
            //tout est ok
            //on monte en session l'id_utilisateur, nom, prenom, email et on retourne true
            $sessionManager= new SessionManager;
            $result =$stmt->fetch();

            $sessionManager->id_cli = $result['id_cli'];
            $sessionManager->name = $result['name'];
            $sessionManager->pname = $result['pname'];
            $sessionManager->mail = $result['mail'];
            $sessionManager->mdp = $result['mdp'];
            $sessionManager->Z45THYIOPOK67 = true;

            return true;
        }

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