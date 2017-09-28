<?php
namespace QUDV\QuantityKind;
use QUDV\IQuantityKind;

class NZCent implements IQuantityKind
{
    public function name(){
        return "new zealand cent";
    }
    public function symbol() {
        return "cent";
    }
    public function description() {
        return "new zealand currency";
    }
    public function id() {
        return $this->symbol().$this->name();
    }
    public function same(IQuantityKind $kind) {
        return $this->id() == $kind->id();
    }
}