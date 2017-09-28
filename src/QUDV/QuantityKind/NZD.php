<?php
namespace QUDV\QuantityKind;
use QUDV\IQuantityKind;

class NZD implements IQuantityKind
{
    public function name(){
        return "new zealand dollar";
    }
    public function symbol() {
        return "$";
    }
    public function description() {
        return "currency";
    }
    public function id() {
        return $this->symbol().$this->name();
    }
    public function same(IQuantityKind $kind) {
        return $this->id() == $kind->id();
    }
}
