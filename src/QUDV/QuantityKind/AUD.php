<?php
namespace QUDV\QuantityKind;
use QUDV\IQuantityKind;

class AUD implements IQuantityKind
{
    public function name(){
        return "australia dollar";
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