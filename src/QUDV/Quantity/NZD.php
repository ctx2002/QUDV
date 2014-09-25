<?php
namespace QUDV\Quantity;

class NZD extends Money {

    

    public function unit()
    {
        return new \QUDV\Unit\NZD();
    }

    public function quantityKind()
    {
        return new \QUDV\QualityKind\Money();
    }
}
