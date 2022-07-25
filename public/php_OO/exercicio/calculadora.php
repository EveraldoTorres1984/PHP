<?php

class Calculadora
{

    public float $numero = 0;

    public function add($num)
    {
        $this->numero += $num;
    }
    public function sub($num)
    {
        $this->numero -= $num;
    }
    public function multiply($num)
    {
        $this->numero *= $num;
    }
    public function divide($num)
    {
        $this->numero /= $num;
    }

    public function total()
    {
        return $this->numero;
    }
    public function clear()
    {
        return $this->numero = 0;
    }
}
