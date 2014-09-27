<?php
namespace QUDV\Quantity;

class AUD extends Money {

    public function unit()
    {
        return new \QUDV\Unit\AUD();
    }

    public function quantityKind()
    {
        return new \QUDV\QuantityKind\Money();
    }

    public function add(AUD $money)
    {
        $v = bcadd($this->getValue(),$money->getValue(),$this->scale);
        return new \QUDV\Quantity\AUD($v);
    }

    public function minus(AUD $money)
    {
        $v = bcsub($this->getValue(),$money->getValue(),$this->scale);
        return new \QUDV\Quantity\AUD($v);
    }

    public function multiply(AUD $money)
    {
        $v = bcmul($this->getValue(),$money->getValue(),$this->scale);
        return new \QUDV\Quantity\AUD($v);
    }

    public function divide(AUD $money)
    {
        $v = bcdiv($this->getValue(),$money->getValue(),$this->scale);
        return new \QUDV\Quantity\AUD($v);
    }

}
