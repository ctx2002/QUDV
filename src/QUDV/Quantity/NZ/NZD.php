<?php
namespace QUDV\Quantity;

class NZD extends Money
{
    /**
     * @return \QUDV\Unit\NZD
     * **/
    public function unit()
    {
        return new \QUDV\Unit\NZ\NZD();
    }
    /**
     * @return  \QUDV\QuantityKind\Currency
     * **/
    public function quantityKind()
    {
        return new \QUDV\QuantityKind\Currency();
    }
}
