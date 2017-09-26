<?php
namespace Entity;
/**
 * Created by PhpStorm.
 * User: Gun
 * Date: 23/09/2017
 * Time: 13:41
 */

class balance
{
    protected $enr;
    protected $cust_r;
    protected $devise;
    protected $amount;
    protected $date;

    /**
     * @return mixed
     */
    public function getEnr()
    {
        return $this->enr;
    }

    /**
     * @param mixed $enr
     */
    public function setEnr($enr)
    {
        $this->enr = $enr;
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
    public function getDevise()
    {
        return $this->devise;
    }

    /**
     * @param mixed $devise
     */
    public function setDevise($devise)
    {
        $this->devise = $devise;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

}