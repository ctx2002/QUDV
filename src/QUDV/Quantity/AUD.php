<?php

namespace QUDV\Quantity;
use QUDV\QUDV\Quantity\Money;

class AUD extends Money {

    public function unit()
    {
        return new \QUDV\Unit\AUD();
    }

    public function quantityKind()
    {
        return new \QUDV\QuantityKind\Currency();
    }
}
