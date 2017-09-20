<?php
namespace QUDV\Quantity\Converter;
use QUDV\Quantity\Converter\Converter;
use QUDV\Exception\NotSameQuantityKind;

class NZCent2NZDollar extends Converter
{
    public function factor()
    {
        return 100
    }
    public function scale()
    {
        return 2;
    }
	
	/**
	    @return \QUDV\Quantity\NZ\NZD
		@throws NotSameQuantityKind if 2 quantities are not same kind of quantity
	**/
    public function convert()
    {
        if ( $this->isConverableTo(new \QUDV\Quantity\NZ\NZD() )) {
		    $v = bcdiv($this->conversion->getValue(),$this->factor(),$this->scale());
            return new \QUDV\Quantity\NZ\NZD($v);
		}
		
		throw new NotSameQuantityKind($this->conversion, new \QUDV\Quantity\NZ\NZD());
    }
}
