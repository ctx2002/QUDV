<?php
namespace QUDV\Quantity\Converter;

use QUDV\Quantity\Converter\Converter;
use QUDV\Quantity\NZD;
use QUDV\Exception\NotSameQuantityKind;

class NZD2AUD extends Converter
{
    public function factor()
    {
        return 0.9;
    }

    public function scale()
    {
        return 2;
    }
    /**
	    @return \QUDV\Quantity\AUD
		@throws NotSameQuantityKind if 2 quantities are not same kind of quantity
	**/
    public function convert()
    {
        if ( $this->isConverableTo(new \QUDV\Quantity\AUD() )) {
			$v = bcmul($this->factor(), $this->conversion->getValue(),$this->scale());
			return new \QUDV\Quantity\AUD($v);
		}
		throw new NotSameQuantityKind($this->conversion, new \QUDV\Quantity\AUD());
    }
}
