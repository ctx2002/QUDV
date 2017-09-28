<?php

namespace QUDV\Quantity;
use QUDV\QUDV\Quantity\Money;

class AUD extends Money {

    public function unit()
    {
        return new \QUDV\Unit\Dollar();
    }

    public function quantityKind()
    {
        return new \QUDV\QuantityKind\AUD();
    }
}
