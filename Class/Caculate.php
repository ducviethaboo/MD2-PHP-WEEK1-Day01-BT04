<?php


class Caculate
{
    public $a;
    public $b;
    public function __construct($num_a,$num_b)
    {
        $this->a = $num_a;
        $this->b = $num_b;
    }

    public function caculateAdd()
    {
        return $this->a + $this->b;
    }

    public function calculateSub()
    {
        return $this->a - $this->b;
    }

    public function calculateMulti()
    {
        return $this->a * $this->b;
    }

    public function calculateDiv()
    {
        return $this->a / $this->b;
    }
}