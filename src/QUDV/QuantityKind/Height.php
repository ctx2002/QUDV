<?php
namespace QUDV\QuantityKind;
use QUDV\QuantityKind;

class Height implements \QUDV\QuantityKind
{
    public function name(){
        return "height";
    }
    public function symbol() {
        return "H";
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
