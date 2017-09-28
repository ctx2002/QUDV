<?php
namespace QUDV\Quantity;

class NZCent extends Money
{
    /**
     * @return \QUDV\Unit\NZCent
     * **/
    public function unit()
    {
        return new \QUDV\Unit\Cent();
    }
    /**
     * @return  \QUDV\QuantityKind\Currency
     * **/
    public function quantityKind()
    {
        return new \QUDV\QuantityKind\NZCent();
    }
}