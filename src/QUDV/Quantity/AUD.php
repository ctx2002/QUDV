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
}
