<?php
namespace QUDV\Quantity\Converter;
use QUDV\Quantity\Converter\Converter;
use QUDV\Quantity\NZ\NZCent;

class NZCent2NZDollar extends Converter
{
    private $conversion;
    public function __construct(NZCent $nzcent) {
        $this->conversion = $nzcent;
    }
    public function factor()
    {
        return 100
    }
    public function scale()
    {
        return 2;
    }
    public function convert()
    {
        $v = bcdiv($this->conversion->getValue(),$this->factor(),$this->scale());
        return new \QUDV\Quantity\NZ\NZD($v);
    }
}
