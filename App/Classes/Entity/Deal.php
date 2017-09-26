<?php
namespace Entity;
/**
 * Created by PhpStorm.
 * User: Gun
 * Date: 23/09/2017
 * Time: 13:42
 */
class Deal
{
    protected $deal_num;
    protected $cust_b;
    protected $book_n;
    protected $cust_s;
    protected $sale_n;

    /**
     * @return mixed
     */
    public function getDealNum()
    {
        return $this->deal_num;
    }

    /**
     * @param mixed $deal_num
     */
    public function setDealNum($deal_num)
    {
        $this->deal_num = $deal_num;
    }

    /**
     * @return mixed
     */
    public function getCustB()
    {
        return $this->cust_b;
    }

    /**
     * @param mixed $cust_b
     */
    public function setCustB($cust_b)
    {
        $this->cust_b = $cust_b;
    }

    /**
     * @return mixed
     */
    public function getBookN()
    {
        return $this->book_n;
    }

    /**
     * @param mixed $book_n
     */
    public function setBookN($book_n)
    {
        $this->book_n = $book_n;
    }

    /**
     * @return mixed
     */
    public function getCustS()
    {
        return $this->cust_s;
    }

    /**
     * @param mixed $cust_s
     */
    public function setCustS($cust_s)
    {
        $this->cust_s = $cust_s;
    }

    /**
     * @return mixed
     */
    public function getSaleN()
    {
        return $this->sale_n;
    }

    /**
     * @param mixed $sale_n
     */
    public function setSaleN($sale_n)
    {
        $this->sale_n = $sale_n;
    }

    /**
     * @return mixed
     */
    public function getDealD()
    {
        return $this->deal_d;
    }

    /**
     * @param mixed $deal_d
     */
    public function setDealD($deal_d)
    {
        $this->deal_d = $deal_d;
    }
    protected $deal_d;

}