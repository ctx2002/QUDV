<?php
namespace QUDV\Exception;
use QUDV\IQuantity;
class NotSameQuantityKind extends \Exception {
    //put your code here
	public function __construct(IQuantity $from, IQuantity $to)
	{
		$mesg = "From quantity kind (".$from->quantityKind()->description().") ";
		$mesg .= "To quantity kind (".$to->quantityKind()->description().")";
		parent::__construct($mesg);
	}
}