<?php
namespace Entity;
/**
 * Created by PhpStorm.
 * User: Gun
 * Date: 20/09/2017
 * Time: 19:52
 */
class cust_r
{
    protected $id_cli;
    protected $mdp;
    protected $name;
    protected $pname;
    protected $dtb;
    protected $mail;
    protected $adress;
    protected $cp;
    protected $city;
    protected $country;
    protected $type;
    protected $actif;

    /**
     * @return mixed
     */
    public function getIdCli()
    {
        return $this->id_cli;
    }

    /**
     * @param mixed $id_clid
     */
    public function setIdCli($id_cli)
    {
        $this->id_cli = $id_cli;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPname()
    {
        return $this->pname;
    }

    /**
     * @param mixed $pname
     */
    public function setPname($pname)
    {
        $this->pname = $pname;
    }

    /**
     * @return mixed
     */
    public function getDtb()
    {
        return $this->dtb;
    }

    /**
     * @param mixed $dtb
     */
    public function setDtb($dtb)
    {
        $this->dtp = $dtb;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * @param mixed $adress
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

    /**
     * @return mixed
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * @param mixed $cp
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * @param mixed $actif
     */
    public function setActif($actif)
    {
        $this->actif = $actif;
    }


}