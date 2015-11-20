<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 20/11/15
 * Time: 1:57
 */
namespace models;

class CalcModel
{
    private $op1;
    private $op2;
    private $result;

    public function __construct($op1, $op2)
    {
        $this->op1 = $op1;
        $this->op2 = $op2;
    }

    public function suma()
    {
        $this->result = $this->op1 + $this->op2;
    }

    public function resta()
    {
        $this->result = $this->op1 - $this->op2;
    }

    public function multiplicar()
    {
        $this->result = $this->op1 * $this->op2;
    }
    public function dividir()
    {
        $this->result = $this->op1 / $this->op2;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }
}