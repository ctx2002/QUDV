<?php
namespace QUDV\Quantity;

class NZD extends Money {
    /**
     * @return \QUDV\Unit\NZD
     * **/
    public function unit()
    {
        return new \QUDV\Unit\NZD();
    }
    /**
     * @return  \QUDV\QuantityKind\Money
     * **/
    public function quantityKind()
    {
        return new \QUDV\QuantityKind\Money();
    }
    /**
     *
     * @return QUDV\Quantity\NZD
     * ***/
    public function add(NZD $money)
    {
        $v = bcadd($this->getValue(),$money->getValue(),$this->scale);
        return new \QUDV\Quantity\NZD($v);
    }
    /**
     *
     * @return QUDV\Quantity\NZD
     * ***/
    public function minus(NZD $money)
    {
        $v = bcsub($this->getValue(),$money->getValue(),$this->scale);
        return new \QUDV\Quantity\NZD($v);
    }
    /**
     *
     * @return QUDV\Quantity\NZD
     * ***/
    public function multiply(NZD $money)
    {
        $v = bcmul($this->getValue(),$money->getValue(),$this->scale);
        return new \QUDV\Quantity\NZD($v);
    }
    /**
     * @return QUDV\Quantity\NZD
     * ***/
    public function divide(NZD $money)
    {
        $v = bcdiv($this->getValue(),$money->getValue(),$this->scale);
        return new \QUDV\Quantity\NZD($v);
    }

}
