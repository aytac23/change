<?php
namespace MyInterface;
/**
 * Created by PhpStorm.
 * User: Gun
 * Date: 23/09/2017
 * Time: 13:14
 */
interface crud
{
    public function insert($obj);
    public function selectAll();
    public function selectOneById($id);
    public function update($obj);

}