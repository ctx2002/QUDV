<?php
namespace QUDV\Quantity;

class NZD extends Money
{
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
        return new \QUDV\QuantityKind\Dollar();
    }
}
