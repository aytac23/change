<?php
namespace Entity;
/**
 * Created by PhpStorm.
 * User: Gun
 * Date: 23/09/2017
 * Time: 13:49
 */
class kyc
{
    protected $ind;
    protected $cust_r;
    protected $idtype;
    protected $passport;

    /**
     * @return mixed
     */
    public function getInd()
    {
        return $this->ind;
    }

    /**
     * @param mixed $ind
     */
    public function setInd($ind)
    {
        $this->ind = $ind;
    }

    /**
     * @return mixed
     */
    public function getCustR()
    {
        return $this->cust_r;
    }

    /**
     * @param mixed $cust_r
     */
    public function setCustR($cust_r)
    {
        $this->cust_r = $cust_r;
    }

    /**
     * @return mixed
     */
    public function getIdtype()
    {
        return $this->idtype;
    }

    /**
     * @param mixed $idtype
     */
    public function setIdtype($idtype)
    {
        $this->idtype = $idtype;
    }

    /**
     * @return mixed
     */
    public function getPassport()
    {
        return $this->passport;
    }

    /**
     * @param mixed $passport
     */
    public function setPassport($passport)
    {
        $this->passport = $passport;
    }

    /**
     * @return mixed
     */
    public function getIdc()
    {
        return $this->idc;
    }

    /**
     * @param mixed $idc
     */
    public function setIdc($idc)
    {
        $this->idc = $idc;
    }

    /**
     * @return mixed
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @param mixed $iban
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
    }

    /**
     * @return mixed
     */
    public function getCb()
    {
        return $this->cb;
    }

    /**
     * @param mixed $cb
     */
    public function setCb($cb)
    {
        $this->cb = $cb;
    }
    protected $idc;
    protected $iban;
    protected $cb;

}