<?php
namespace QUDV\Quantity\Converter;
use QUDV\Quantity\Converter\Converter;
use QUDV\Quantity\NZD;

class NZCent2NZDollar extends Converter
{
    private $conversion;
    public function __construct(NZD $nzd) {
        $this->conversion = $nzd;
    }
    public function factor()
    {
        return 100
    }
    public function scale()
    {
        return 3;
    }
    public function convert()
    {
        $v = bcdiv($this->conversion->getValue(),$this->factor(),$this->scale());
        return new \QUDV\Quantity\NZD($v);
    }
}
