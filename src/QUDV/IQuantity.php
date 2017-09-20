<?php

namespace QUDV;

/**
 *
 * @author anru
 */
interface IQuantity {
    /**
	    @return QUDV\IUnit
	*/
    public function unit();
    /**
	    @return QUDV\IQuantityKind
	*/
    public function quantityKind();
}