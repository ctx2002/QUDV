<?php
namespace QUDV\Quantity\Converter;
use QUDV\IQuantity
abstract class Converter
{
    abstract public function factor();
	/**
	    @return IQuantity
	**/
    abstract public function convert();
    abstract public function scale();
	
	protected $conversion;
    public function __construct(IQuantity $q) {
        $this->conversion = $q;
    }
	
	/**
	   @return boolean
	**/
	public function isConverableTo(IQuantity $quantity)
	{
		return $quantity->quantityKind()->same($this->conversion->quantityKind());
	}
}
