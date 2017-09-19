<?php
namespace QUDV\QuantityKind;
use QUDV\IQuantityKind;
class Dollar implements IQuantityKind
{
    public function name(){
        return "Dollar";
    }
    public function symbol() {
        return "$";
    }
    public function description() {
        return "";
    }
    public function id() {
        return $this->symbol().$this->name();
    }
    public function same(IQuantityKind $kind) {
        return $this->id() == $kind->id();
    }
}
