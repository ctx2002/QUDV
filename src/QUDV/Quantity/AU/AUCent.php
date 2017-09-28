<?php
namespace QUDV\Quantity;
use QUDV\QUDV\Quantity\Money;

class AUCent extends Money {

    public function unit()
    {
        return new \QUDV\Unit\Cent();
    }

    public function quantityKind()
    {
        return new \QUDV\QuantityKind\AUCent();
    }
}