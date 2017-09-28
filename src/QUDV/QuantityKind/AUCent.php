<?php
namespace QUDV\QuantityKind;
use QUDV\IQuantityKind;

class AUCent implements IQuantityKind
{
    public function name(){
        return "australia cent";
    }
    public function symbol() {
        return "cent";
    }
    public function description() {
        return "australia cent";
    }
    public function id() {
        return $this->symbol().$this->name();
    }
    public function same(IQuantityKind $kind) {
        return $this->id() == $kind->id();
    }
}