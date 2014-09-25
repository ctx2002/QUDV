<?php

namespace QUDV\Quantity;
use QUDV\Exception\NotSameType;

abstract class Money {

    private $value;

    public function __construct($number)
    {
        $this->value = $number;
    }

    public function getValue()
    {
        return $this->value;
    }

    protected function calculate($bcmathFunc,Money $leftOperand, Money $rightOperand)
    {
        if ($leftOperand->same($rightOperand)) {
            return call_user_func($bcmathFunc,$leftOperand->getValue(),$rightOperand->getValue(),2);
        }
        throw new NotSameType("left : " . $leftOperand . " , right: ".$rightOperand );
    }

    public function add(Money $money)
    {
        return $this->calculate("bcadd", $this, $money);
    }

    public function minus(Money $money) {

        return $this->calculate("bcsub", $this, $money);
    }

    public function multiply(Money $money) {
        return $this->calculate("bcmul", $this, $money);
    }

    public function divide(Money $money) {
        return $this->calculate("bcdiv", $this, $money);
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
}
