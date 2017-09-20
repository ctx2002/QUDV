<?php
namespace QUDV\Quantity;

class NZCent extends Money
{
    /**
     * @return \QUDV\Unit\NZCent
     * **/
    public function unit()
    {
        return new \QUDV\Unit\NZ\NZCent();
    }
    /**
     * @return  \QUDV\QuantityKind\Currency
     * **/
    public function quantityKind()
    {
        return new \QUDV\QuantityKind\Currency();
    }
}