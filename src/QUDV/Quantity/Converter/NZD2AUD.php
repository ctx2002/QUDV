<?php
namespace QUDV\Quantity\Converter;

use QUDV\Quantity\Converter\Converter;
use QUDV\Quantity\NZD;

/**
 this conversion is wrong, we have not consider QuantityKind yet
***/
class NZD2AUD extends Converter
{
    private $conversion;
    public function __construct(NZD $nzd) {
        $this->conversion = $nzd;
    }

    public function factor()
    {
        return 0.9;
    }

    public function scale()
    {
        return 2;
    }

    public function convert()
    {
        $v = bcmul($this->factor(), $this->conversion->getValue(),$this->scale());
        return new \QUDV\Quantity\AUD($v);
    }
}
