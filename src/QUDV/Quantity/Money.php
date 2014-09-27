<?php

namespace QUDV\Quantity;
use QUDV\Exception\NotSameType;

abstract class Money {

    private $value;
    protected $scale;
    public function __construct($number,$scale = 2)
    {
        $this->value = $number;
        $this->scale = $scale;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function same(Money $money)
    {
        if ($this->unit()->same($money->unit()  )) {
            if ($this->quantityKind()->same($money->quantityKind() )) {
                return true;
            }
        }

        return false;
    }

    public function __toString()
    {
        return "{value: [".$this->getValue()." ] , unit: [".$this->unit()->id()."],"
                . "quantity kind: [".$this->quantityKind()->id()."]}";
    }

    abstract public function unit();
    abstract public function quantityKind();
    /*abstract public function add(Money $money);
    abstract public function minus(Money $money) ;
    abstract public function multiply(Money $money);
    abstract public function divide(Money $money);*/
}
