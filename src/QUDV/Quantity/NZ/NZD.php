<?php
namespace QUDV\Quantity;
use QUDV\QUDV\Quantity\Money;
class NZD extends Money
{
    /**
     * @return \QUDV\Unit\NZD
     * **/
    public function unit()
    {
        return new \QUDV\Unit\Dollar();
    }
    /**
     * @return  \QUDV\QuantityKind\Currency
     * **/
    public function quantityKind()
    {
        return new \QUDV\QuantityKind\NZD();
    }
}
